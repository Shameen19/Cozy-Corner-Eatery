<?php

namespace App\Http\Controllers;
use Request;
use Illuminate\Support\Facades\DB;

class Homecontroller extends Controller{

    public function index()
    {
        return view("home");
    }
    public function dashboard()
    {
        return view("admindashboard");
    }

    public function login()
    {
        return view("login");
    }
    public function registeration()
    {
        return view("registeration");
    }
    public function adminlogin()
    {
        return view("admin");
    }
    function register()
    {
        return view("registeration");
    }
    public function addproduct()
    {
        return view("addproduct");
    }
    public function updatedish()
    {
        return view("updateproduct");
    }
    public function deletedish()
    {
        return view("deleteproduct");
    }
    public function updatepass()
    {
        return view("updatepass");
    }
    public function menu()
    {
        return view("menu");
    }
    public function profile()
    {
        return view( "profile");
    }
    public function updatepassworduser()
    {
        return view("updatepassword");
    }
    public function updateemailuser()
    {
        return view("updateemail");
    }
    public function updateaddressuser()
    {
        return view("updateaddress");
    }
    public function order()
    {
        return view("addtocart");
    }

    function match()
    {
        $uname=Request::input('username');
        $password=Request::input('password');
        $login=DB:: select('select password from admin where username = ?',[$uname]);
        if(count ($login) > 0)
        {
            foreach($login as $auth)
            {
                if(($auth ->password)==$password)
                {
                    return redirect('admindashboard');
                }
                else{
                    $error='Password or user id does not match';
                    if (empty($error)){}
                    else{echo '<script>alert("Password or id does not match")</script>'; } 
                    return redirect('admin')->with('error',$error);
                }
            }
        }
    }
    function store()
    {
        $firstname= Request::input('firstname');
        $lastname= Request::input('lastname');
        $username= Request::input('username');
        $address= Request::input('address');
        $email= Request::input('email');
        $password= Request::input('password');

        DB::insert('insert into customers(firstname,lastname,username,address,email,password) values(?,?,?,?,?,?)',[$firstname, $lastname,$username,$address,$email,$password]);
        
        return redirect('login');

    }
    function adding()
    {
        $dish= Request::input('dish');
        $dishtype=Request::input('dishtype');
        $price= Request::input('price');
        $chef= Request::input('chef');

        DB::insert('insert into products(dish_name,dish_type,price,chef) values(?,?,?,?)',[$dish,$dishtype,$price,$chef]);
        
        return redirect('admin');

    }
    function reviews()
    {
        $name= Request::input('name');
        $email=Request::input('email');
        $message= Request::input('message');
        
        DB::insert('insert into reviews(name,email,message) values(?,?,?)',[$name,$email,$message]);
        
        return redirect('profile');

    }
     function makereservation()
    {
        $name= Request::input('name');
        $email=Request::input('email');
        $phone= Request::input('phone');
        $number_guests=Request::input('number_guests');
        $date=Request::input('date');
        $time=Request::input('time');
        $message=Request::input('message');

        DB::insert('insert into tablereserve(name,email,phone,guests,datee,time,message) values(?,?,?,?,?,?,?)',[$name,$email,$phone, $number_guests,$date,$time,$message]);
        
        return redirect('home');

    }


     public function updatedishrecord(){
        $dish = Request::input('dish');
        $price = Request::input('price');
        DB::update('update products set  price=? where dish_name= ?', [$price, $dish]);
        return redirect('admindashboard');
     }
     public function deletedishrecord(){
        $dish = Request::input('dish');
        $dishtype = Request::input('dishtype');
        DB::delete('delete from products  where dish_name= ?,dish_type=?', [$dish, $dishtype]);
        return redirect('admindashboard');
     }

     public function updatepassword(){
        $password = Request::input('password');
        $new_password = Request::input('new_password');
        DB::update('update admin set  password=? where password= ?', [$new_password, $password]);
        return redirect('admin');
     }

     public function updateuserpassword(){
        $password = Request::input('password');
        $new_password = Request::input('new_password');
        DB::update('update customers set  password=? where password= ?', [$new_password, $password]);
        return redirect('updatepassword');
     }

     public function updateuseremail(){
         $name=Request::input('name');
        $email = Request::input('email');
        $new_email = Request::input('new_email');
        $login=DB:: select('select username from customers where username = ?',[$name]);
        $login2=DB:: select('select email from customers where email = ?',[$email]);
        if(count ($login) > 0)
        {
            foreach($login as $auth)
            {
                foreach($login2 as $auth2)
                {
                    
                if(($auth ->username)==$name)
                {
                    
                if(($auth2 ->email)==$email)
                {
                    DB::update('update customers set  email=? where email= ?', [$new_email, $email]);
                    return redirect("profile");
                }
                else
                {
                    $error='Password or user id does not match';
                    if (empty($error)){}
                    else{echo '<script>alert("Password or id does not match")</script>'; } 
                    return redirect('admin')->with('error',$error);
                }
                }
                else{
                    $error='Password or user id does not match';
                    if (empty($error)){}
                    else{echo '<script>alert("Password or id does not match")</script>'; } 
                    return redirect('admin')->with('error',$error);
                }
                }
            }
        }
     }

     public function updateuseraddress(){
        $username=Request::input('username');
       $address = Request::input('address');
       $new_address = Request::input('new_address');
       $login=DB:: select('select username from customers where username = ?',[$username]);
       $login2=DB:: select('select address from customers where address = ?',[$address]);
       if(count ($login) > 0)
       {
           foreach($login as $auth)
           {
               foreach($login2 as $auth2)
               {
                   
               if(($auth ->username)==$username)
               {
                   
               if(($auth2 ->address)==$address)
               {
                   DB::update('update customers set  address=? where address= ?', [$new_address, $address]);
                   return redirect("profile");
               }
               else{
                   $error='Password or user id does not match';
                   if (empty($error)){}
                   else{echo '<script>alert("Password or id does not match")</script>'; } 
                   return redirect('admin')->with('error',$error);
               }
               }
               else{
                   $error='Password or user id does not match';
                   if (empty($error)){}
                   else{echo '<script>alert("Password or id does not match")</script>'; } 
                   return redirect('admin')->with('error',$error);
               }
               }
           }
       }
    }
      


    public function addtocart(){
        $dish=Request::input('dish');
       $dishtype = Request::input('dishtype');
       $Quantity = Request::input('Quantity');
       $special=Request::input('special');
       $login=DB:: select('select dish from products where dish_name = ?',[$dish]);
       $login2=DB:: select('select price from products where dish_name = ?',[$dish]);
       if(count ($login) > 0)
       {
           foreach($login as $auth)
           {
            if(($auth ->dish_name)==$dish)

            {
                DB::insert('insert into order(dishname,dishtype,Quantity,special_instruction) values(?,?,?,?)',[$dish,$dishtype,$Quantity, $special]);
                return redirect('profile');
            }
            else{
                $error='Password or user id does not match';
                if (empty($error)){}
                else{echo '<script>alert("Password or id does not match")</script>'; } 
                return redirect('admin')->with('error',$error);
            }
           }
       }
    }

    
}
