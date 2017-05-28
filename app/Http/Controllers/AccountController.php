<?php
namespace Xetaravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Xetaio\Mentions\Parser\MentionParser;
use Xetaravel\Models\Repositories\AccountRepository;
use Xetaravel\Models\User;
use Xetaravel\Models\Validators\AccountValidator;

class AccountController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->breadcrumbs->addCrumb('Account', route('users.account.index'));
    }

    /**
     * Show the account update form.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $user = User::find(Auth::user()->id);

        $this->breadcrumbs->setCssClasses('breadcrumb');

        return view('account.index', ['user' => $user, 'breadcrumbs' => $this->breadcrumbs]);
    }

    /**
     * Handle an account update request for the application.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        AccountValidator::update($request->all())->validate();
        $account = AccountRepository::update($request->all(), Auth::user()->id);

        $parser = new MentionParser($account, ['mention' => false]);
        $signature = $parser->parse($account->signature);
        $biography = $parser->parse($account->biography);

        $account->signature = $signature;
        $account->biography = $biography;
        $account->save();

        $user = User::find(Auth::user()->id);

        // Handle the avatar upload.
        if (!is_null($request->file('avatar'))) {
            $user->clearMediaCollection('avatar');
            $user->addMedia($request->file('avatar'))
                ->preservingOriginal()
                ->setName(substr(md5($user->username), 0, 10))
                ->setFileName(substr(md5($user->username), 0, 10) . '.' . $request->file('avatar')->extension())
                ->toMediaCollection('avatar');
        }

        return redirect()
            ->route('users.account.index')
            ->with('success', 'Your account has been updated successfully !');
    }
}
