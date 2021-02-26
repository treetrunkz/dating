<?php

//  controllers/controller.php

class Controller
{
    private $_f3;

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    /** Display home page */
    function home()
    {
        //Display a view
        $view = new Template();
        echo $view->render('view/home.html');
    }

    function form()
    {
        global $validator;
        global $dataLayer;
        global $form;


        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD']=='POST') {

            $userFirst = $_POST['inputName1'];
            $userLast = $_POST['inputName2'];
            $userGender = $_POST['gender'];
            $userAge = $_POST['inputAge'];
            $userPhone = $_POST['inputPhone'];
            $userIndoor = $_POST['indoor'];
            $userOutdoor = $_POST['outdoor'];

        if($validator->validName($userFirst)) {
            $form->setUserFirst($userFirst);
        }else {
            $this->_f3->set('errors["userFirst"], first name cannot be blank and must only contain characters');
        }

        if($validator->validLastName($userLast)) {
            $form->setUserLast($userLast);
        } else {
            $this->_f3->set('errors["userLast"], last name cannot be blank and must only contain characters');
        }

        if($validator->validAge($userAge)) {
            $form->setUserAge($userAge);
        } else {
            $this->_f3->set('errors["userAge"], age must be within 18 and 118 and a number');
        }

        if($validator->validPhone($userPhone)) {
            $form->setUserPhone($userPhone);
        } else {
            $this->_f3->set('errors["userPhone"], phone must be input as numbers and in the correct format');
        }

        if($validator->validGender($userGender)) {
            $form->setUserGender($userGender);
        } else {
            $this->_f3->set('errors["userGender"], gender must within the defined list for input.');
        }

        if($validator->validOutdoor($userOutdoor)) {
            $form->setUserOutdoor($userOutdoor);
        } else {
            $this->_f3->set('errors["userOutdoor"], input must be an Outdoor activity.');
        }

        if($validator->validIndoor($userIndoor)) {
            $form->setUserIndoor($userIndoor);
        } else {
            $this->_f3->set('errors["userIndoor"], input must be a Indoor activity.');
        }

        if(empty($this->_f3->get('errors'))) {
            $_SESSION['form'] = $form;
            $this->_f3->reroute('/form2');
        }
        }
//        var_dump($_POST);
   //     $this->_f3->set('gender', $dataLayer->getUserGender());
//        $this->_f3->set('outdoor', $dataLayer->getUserOutdoor());
//        $this->_f3->set('indoor', $dataLayer->getUserIndoor());

        $view = new Template();
        echo $view->render('view/createAccount.html');
    }

    function form2()
    {
        global $validator;
        global $dataLayer;
        global $form2;

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $userEmail = $_POST['email'];
            $userState = $_POST['state'];
            $userSeeking = $_POST['sexual'];


            if($validator->validEmail($userEmail)) {
                $form2->setEmail($userEmail);
            } else {
                $this->_f3->set('errors["userEmail"], email must be inputted in the correct email format xxx@mail.com');
            }

            if($validator->validState($userState)) {
                $form2->setState($userState);
            } else {
                $this->_f3->set('errors["userState"], state must be within the provided list');
            }

            if($validator->validSex($userSeeking)) {
                $form2->setSex($userSeeking);
            } else {
                $this->_f3->set('errors["userSex"], sex must be within the provided list');
            }

            if (empty($this->_f3->get('errors'))) {
                $this->_f3->reroute('/summary');
            }
        }

        $view = new Template();
        echo $view->render('views/dating.html');
    }

    function summary()
    {
        echo "<p>SESSION:</p>";
        var_dump($_SESSION);

        //Display a view
        $view = new Template();
        echo $view->render('views/summary.html');

        //Write to database

        //Clear the SESSION array
        session_destroy();
    }
}