<?php
/**
 * Created by PhpStorm.
 * User: goksuadanali
 * Date: 3/13/16
 * Time: 4:13 PM
 */

namespace Felis;


class LoginView extends View
{
    /**
     * Constructor
     * Sets the page title and any other settings.
     */
    public function __construct(array $session, array $get) {
        if(isset($get['e']))
        {
            $this->error = true;
        }
    }

    public function login() {
        $errorMessage = "";
        if ($this->error)
        {
            $errorMessage = "Incorrect username or password. Please try again.";
        }

        $html = <<<HTML
        <form method="post" action="post/login.php">
	<fieldset>
		<legend>Login</legend> $errorMessage
		<p>
			<label for="email">Email</label><br>
			<input type="email" id="email" name="email" placeholder="Email">
		</p>
		<p>
			<label for="password">Password</label><br>
			<input type="password" id="password" name="password" placeholder="Password">
		</p>
		<p>
			<input type="submit" value="Log in"> <a href="">Lost Password</a>
		</p>
		<p><a href="./">Felis Agency Home</a></p>

	</fieldset>
</form>
HTML;
        return $html;
    }

    private $session = array();
    private $get = array();
    private $error = false;
}