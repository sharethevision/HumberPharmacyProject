<?php
    require_once './Customer.php';
    require_once './Databases.php';
    
    class Customer_DB{
        public static function getAllCustomers(){
            $db = Databases::connectDB();
            $sql = 'select * from tbl_customer';
            $results = $db->query($sql);
            
            $records = array();
            foreach($results as $row)
            {
                $record = new Customer($row['customerid'],
                        $row['firstname'],
                        $row['lastname'],
                        $row['dob'],
                        $row['address1'],
                        $row['address2'],
                        $row['city'],
                        $row['zip'],
                        $row['province'],
                        $row['gender'],
                        $row['email'],
                        $row['password'],
                        $row['lastsignin']);
                
                $records[]=$record;
            }
            return $records;
        }
        
        public static function insertCustomer($fname,$lname,$dob,$address1,$address2,$city,$zip,$province,$gender,$email,$password)
        {
            $db=  Databases::connectDB();
            $query = "insert into tbl_customer (Firstname,Lastname,dob,address1,address2,city,zip,province,Gender,email,password) values (:fname, :lname, :dob, :address1, :address2, :city, :zip, :province, :gender, :email, :password)";
            $stm=$db->prepare($query);
            $stm->bindParam(':fname',$fname, PDO::PARAM_STR, 30);
            $stm->bindParam(':lname',$lname, PDO::PARAM_STR, 30);
            $stm->bindParam(':dob',$dob, PDO::PARAM_STR, 30);
            $stm->bindParam(':address1',$address1, PDO::PARAM_STR, 100);
            $stm->bindParam(':address2',$address2, PDO::PARAM_STR, 100);
            $stm->bindParam(':city',$city, PDO::PARAM_STR, 30);
            $stm->bindParam(':zip',$zip, PDO::PARAM_STR, 6);
            $stm->bindParam(':province',$province, PDO::PARAM_STR, 2);
            $stm->bindParam(':gender',$gender, PDO::PARAM_INT, 1);
            $stm->bindParam(':email',$email, PDO::PARAM_STR, 50);
            $stm->bindParam(':password',$password, PDO::PARAM_STR, 50);
            $result = $stm->execute();
            $lastid=$stm->lastInsertId();
            return $lastid;
        }
        
        public static function updateCustomer($id,$fname,$lname,$dob,$address1,$address2,$city,$zip,$province,$gender,$email,$password)
        {
            $db=  Databases::connectDB();
            $query = "update tbl_customer set Firstname=:fname, Lastname=:lname, dob=:dob, address1=:address1, address2=:address2, city=:city, zip=:zip, province=:province, gender=:gender, email=:email, password=:password where customerid=:id";
            $stm=$db->prepare($query);
            $stm->bindParam(':id',$id, PDO::PARAM_STR, 10);
            $stm->bindParam(':fname',$fname, PDO::PARAM_STR, 30);
            $stm->bindParam(':lname',$lname, PDO::PARAM_STR, 30);
            $stm->bindParam(':dob',$dob, PDO::PARAM_STR, 30);
            $stm->bindParam(':address1',$address1, PDO::PARAM_STR, 100);
            $stm->bindParam(':address2',$address2, PDO::PARAM_STR, 100);
            $stm->bindParam(':city',$city, PDO::PARAM_STR, 30);
            $stm->bindParam(':zip',$zip, PDO::PARAM_STR, 6);
            $stm->bindParam(':province',$province, PDO::PARAM_STR, 2);
            $stm->bindParam(':gender',$gender, PDO::PARAM_INT, 1);
            $stm->bindParam(':email',$email, PDO::PARAM_STR, 50);
            $stm->bindParam(':password',$password, PDO::PARAM_STR, 50);
            $result = $stm->execute();
            return $result;
        }
        
        public static function deleteData($id)
        {
            $db=  Databases::connectDB();
            $query="delete from tbl_customer where customerid=:id";
            $stm=$db->prepare($query);
            $stm->bindParam(':id',$id, PDO::PARAM_STR, 10);
            $result = $stm->execute();
            return $result;
        }
    }
?>
