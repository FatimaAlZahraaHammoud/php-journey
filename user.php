<?php 
    class User{
        private $username;
        private $email;
        private $password;

        public function __construct($username, $email, $password){
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
        }

        // check password
        public static function check_password($password){
            // expression regex
            return preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{12,}$/", $password);
        }

        // validate email
        public static function validate_email($email){
            return preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email);
        }

        public function copy_with($username = null, $email = null, $password = null){
            return new User(
                $username ?? $this->username,
                $email ?? $this->email,
                $password ?? $this->password,
            );
        }
    }

    // Validating password
    $password = "Hello@Pass123";
    $password2 = "hello";
    echo User::check_password($password) ? "Valid Password" : "Invalid Password";
    echo "\n";
    echo User::check_password($password2) ? "Valid Password" : "Invalid Password";
    echo "\n";
    
    // Validating email
    $email = "test@example.com";
    $email2 = "testexample.com";
    echo User::validate_email($email) ? "Valid Email" : "Invalid Email";
    echo "\n";
    echo User::validate_email($email2) ? "Valid Email" : "Invalid Email";
    echo "\n";

    // Creating and copying users
    $user = new User("Fatima", "fatima@example.com", "Hello@Pass123");
    
    // Creating a copy with updated username and email
    $newUser = $user->copy_with(username:"Fatima AlZahraa", email: "fatimaAlZahraa@example.com");
    
    print_r($newUser);

?>