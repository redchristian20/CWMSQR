<?php
    class user extends CI_Model{
        function get_all_users()
        {
            return $this->db->query("SELECT * FROM users")->result_array();
        }
        function get_user_by_id($user_id)
        {
            return $this->db->query("SELECT * FROM users WHERE id=?", array($user_id))->row_array();
        }
        function add_user($user)
        {
            $query = "INSERT INTO users(lastname, firstname, middlename, email, password, salt, created_at, updated_at) VALUES (?,?,?,?,?,?,?,?)";
            $values = array($user['lastname'],$user['firstname'],$user['middlename'], $user['email'], $user['password'], $user['salt'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s")); 
            return $this->db->query($query, $values);
        }


        //edit a user
        function edit_user($user)
        {
            $query = "UPDATE users SET lastname=?, firstname=?, middlename=?, email=?, updated_at=? WHERE id=?";
            $values = array($user['lastname'],$user['firstname'],$user['middlename'],$user['email'], date("Y-m-d, H:i:s"), $user['id']); 
            return $this->db->query($query, $values);
        }


        function delete_user($user_id)
        {
            $query = "DELETE FROM users WHERE id=?";
            return $this->db->query($query,$user_id);
        }

    
    }
?>