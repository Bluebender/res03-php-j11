<?php

// require "managers/UserManager.php";
require "controllers/AbstractController.php";
require "managers/UserManager.php";

class UserController extends AbstractController {
    
    private UserManager $manager;
    
    public function __construct(){
        $this->manager = new UserManager("db.3wa.io", "3306", "vincentollivier_phpj11", "vincentollivier", "98f74e8350a6f9da22f312f5162d2994");
    }
    
    public function index(){
        $users = $this->manager->getAllUsers();
        $this->render("index", ["users"=>$users]);
        var_dump ($users);
    }
    public function create(){
        
    }
    public function edit(){
        
    }

    
    
    // public function index()
    // {
        
    //     render("index", ["users"=>$this->manager->getAllUsers()]);
    // }
    
    // public function create(array $post)
    // {
    //     $user = new User($post['email'], $post['username'], $post['password']);
    //     $this->manager-> insertUser($user);
    //     render("create", ["user"=>$this->manager->insertUser($user)]);
    // }
    
    // public function edit(array $post)
    // {
    //     $user = new User($post['email'], $post['username'], $post['password']);
    //     $this->manager-> editUser($user);
    //     render("edit", ["user"=>$user]);
    // }
}  

?>