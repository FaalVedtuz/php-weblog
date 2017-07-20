<?php
    class connect{
        public static function openConnection(){
            define("DB_DRIVER","mysql");
            define("DB_SERVER","localhost");
            define("DB_NAME","weblog");
            define("DB_UNAME","weblog01");
            define("DB_PASS","justapassword01");
     
             try{
                $dbcon = new PDO(DB_DRIVER . ":host=" . DB_SERVER .";dbname=" . DB_NAME,DB_UNAME,DB_PASS);
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $dbcon;
            }
            catch(PDOException $ex){
                echo $ex->getMessage();
            }
        }

        public static function closeConnection(){
                die();
                $this->dbcon = null;
                return true;
        }
    } /* END OF OPENCON CLASS */

     class register extends connect{

         public static function reg_user($fname,$lname,$email,$uname,$pw){

            $dbcon = connect::openConnection();
            if($dbcon){
                $reg_stmnt = $dbcon->prepare("INSERT INTO users(FIRSTNAME,LASTNAME,EMAIL,USERNAME,PASSWORD)
                        VALUES(:fname,:lname,:email,:uname,:pw)");
                $reg_stmnt->bindparam(':fname',$fname);
                $reg_stmnt->bindparam(':lname',$lname);
                $reg_stmnt->bindparam(':email',$email);
                $reg_stmnt->bindparam(':uname',$uname);
                $reg_stmnt->bindparam(':pw',$pw);
                $reg_stmnt->execute();
                return true;
            }
            else{
                connect::closeConnection();
                return false;
            }

         }  /* END OF REG_USER FXN */
         
     } /* END OF REGISTER CLASS */

     class selectUser extends connect{

         public static function user_select($uname,$pw){

            $dbcon = connect::openConnection();
            
            if($dbcon){
                /* get password in the db first */
                $get_pw = $dbcon->prepare("SELECT PASSWORD FROM users WHERE USERNAME=:uname");
                $get_pw->bindparam(':uname',$uname);
                $get_pw->execute();
                $userpw = $get_pw->fetch(PDO::FETCH_ASSOC);
                
                /* compare password hash */
         
                if(password_verify($pw,$userpw['PASSWORD'])){
                    $_SESSION["user"] = $uname;
                    return true;
                }else{
                    return false; 
                }   
            }
            else{
                connect::closeConnection();
                return false;
            }
         }  /* END OF USER_SELECT FXN */
         
     } /* END OF SELECTUSER CLASS */
?>