<?php
    class user extends CI_Model{

        //Returns an array of all users in the database
        function get_all_users()
        {
            return $this->db->query("SELECT * FROM users")->result_array();
        }
        //Returns an array with the specific user with the specified ID
        function get_user_by_id($user_id)
        {
            return $this->db->query("SELECT * FROM users WHERE id=?", array($user_id))->row_array();
        }

        function get_user_by_username($username)
        {
            return $this->db->query("SELECT * FROM users WHERE username=?", array($username))->row_array();
        }

        //Adds the user to the database
        function add_user($user)
        {
            $query = "INSERT INTO users(username, honorific, lastname, firstname, middlename, suffix, email, contact_number, password, salt, created_at, updated_at) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            $values = array($user['username'], $user['honorific'], $user['lastname'],$user['firstname'],$user['middlename'], $user['suffix'], $user['email'],$user['contact_number'], $user['password'], $user['salt'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s")); 
            return $this->db->query($query, $values);
        }
        //Edits the user
        function edit_user($user)
        {
            $query = "UPDATE users SET username=?, honorific=?, lastname=?, firstname=?, middlename=?, suffix=?, email=?, contact_number=?, updated_at=? WHERE id=?";
            $values = array($user['username'], $user['honorific'], $user['lastname'],$user['firstname'],$user['middlename'], $user['suffix'],$user['email'], $user['contact_number'], date("Y-m-d, H:i:s"), $user['id']); 
            return $this->db->query($query, $values);
        }
        //Deletes the user (for testing purposes only)
        function delete_user($user_id)
        {
            $query = "DELETE FROM users WHERE id=?";
            return $this->db->query($query,$user_id);
        }
    }
?>