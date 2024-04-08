<?php 
//don't run this file directly
defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php';
class CB_DataTableList extends WP_List_Table {
    // function __construct() {
    //     parent::__construct( array(
    //         'singular'  => 'cb-datatable',
    //         'plural'    => 'cb-datatables',
    //         'ajax'      => false
    //     ) );
    // }


    public function wp_list_table_data() {
         $data = array(
            array("id" => 1, "name" => "John", "age" => 20, "city" => "New York", "country" => "USA", "phone" => "(555) 555-5555", "email" => "pM5Jav@example.com"),
            array("id" => 2, "name" => "Jane", "age" => 25, "city" => "San Francisco", "country" => "USA", "phone" => "(555) 555-5555", "email" => "pM5rJv@example.com"),
            array("id" => 3, "name" => "Bob", "age" => 30, "city" => "London", "country" => "UK", "phone" => "(555) 555-5555", "email" => "peM5Jv@example.com"),
            array("id" => 4, "name" => "Alice", "age" => 35, "city" => "Paris", "country" => "France", "phone" => "(555) 555-5555", "email" => "pM5aJv@example.com"),
            array("id" => 5, "name" => "Charlie", "age" => 40, "city" => "Berlin", "country" => "Germany", "phone" => "(555) 555-5555", "email" => "pM5eJv@example.com"),
            array("id" => 6, "name" => "David", "age" => 45, "city" => "Madrid", "country" => "Spain", "phone" => "(555) 555-5555", "email" => "pM5dJv@example.com"),
            array("id" => 7, "name" => "Eve", "age" => 50, "city" => "Barcelona", "country" => "Spain", "phone" => "(555) 555-5555", "email" => "pM5Jav@example.com"),
            array("id" => 8, "name" => "Frank", "age" => 55, "city" => "Amsterdam", "country" => "Netherlands", "phone" => "(555) 555-5555", "email" => "pM5dJv@example.com"),
            array("id" => 9, "name" => "Grace", "age" => 60, "city" => "Rome", "country" => "Italy", "phone" => "(555) 555-5555", "email" => "pM5Jv@example.com"),
            array("id" => 10, "name" => "Heidi", "age" => 65, "city" => "Paris", "country" => "France", "phone" => "(555) 555-5555", "email" => "pMa5Jv@example.com"),
            array("id" => 11, "name" => "Ivy", "age" => 70, "city" => "London", "country" => "UK", "phone" => "(555) 555-5555", "email" => "pMdJv@example.com"),
            array("id" => 12, "name" => "Jack", "age" => 75, "city" => "New York", "country" => "USA", "phone" => "(555) 555-5555", "email" => "pM5Jav@example.com"),
            array("id" => 13, "name" => "Kate", "age" => 80, "city" => "San Francisco", "country" => "USA", "phone" => "(555) 555-5555", "email" => "pM5rJv@example.com"),
            array("id" => 14, "name" => "Luke", "age" => 85, "city" => "London", "country" => "UK", "phone" => "(555) 555-5555", "email" => "peM5Jv@example.com"),
            array("id" => 15, "name" => "Mia", "age" => 90, "city" => "Paris", "country" => "France", "phone" => "(555) 555-5555", "email" => "pM5aJv@example.com"),
            array("id" => 16, "name" => "Nancy", "age" => 95, "city" => "Berlin", "country" => "Germany", "phone" => "(555) 555-5555", "email" => "pM5eJv@example.com"),
            array("id" => 17, "name" => "Oliver", "age" => 100, "city" => "Madrid", "country" => "Spain", "phone" => "(555) 555-5555", "email" => "pM5dJv@example.com"),
            array("id" => 18, "name" => "Peter", "age" => 105, "city" => "Barcelona", "country" => "Spain", "phone" => "(555) 555-5555", "email" => "pM5Jav@example.com"),
            array("id" => 19, "name" => "Quinn", "age" => 110, "city" => "Amsterdam", "country" => "Netherlands", "phone" => "(555) 555-5555", "email" => "pM5dJv@example.com"),
            array("id" => 20, "name" => "Ruby", "age" => 115, "city" => "Rome", "country" => "Italy", "phone" => "(555) 555-5555", "email" => "pM5Jv@example.com"),
            array("id" => 21, "name" => "Sarah", "age" => 120, "city" => "Paris", "country" => "France", "phone" => "(555) 555-5555", "email" => "pMa5Jv@example.com"),
            array("id" => 22, "name" => "Tara", "age" => 125, "city" => "London", "country" => "UK", "phone" => "(555) 555-5555", "email" => "pMdJv@example.com"),
            array("id" => 23, "name" => "Ursula", "age" => 130, "city" => "New York", "country" => "USA", "phone" => "(555) 555-5555", "email" => "pM5Jav@example.com"),
            array("id" => 24, "name" => "Violet", "age" => 135, "city" => "San Francisco", "country" => "USA", "phone" => "(555) 555-5555", "email" => "pM5rJv@example.com"),
            array("id" => 25, "name" => "Wendy", "age" => 140, "city" => "London", "country" => "UK", "phone" => "(555) 555-5555", "email" => "peM5Jv@example.com"),
            array("id" => 26, "name" => "Xander", "age" => 145, "city" => "Paris", "country" => "France", "phone" => "(555) 555-5555", "email" => "pM5aJv@example.com"),
            array("id" => 27, "name" => "Yvonne", "age" => 150, "city" => "Berlin", "country" => "Germany", "phone" => "(555) 555-5555", "email" => "pM5eJv@example.com"),
            array("id" => 28, "name" => "Zoe", "age" => 155, "city" => "Madrid", "country" => "Spain", "phone" => "(555) 555-5555", "email" => "pM5dJv@example.com"),
            array("id" => 29, "name" => "Alicia", "age" => 160, "city" => "Barcelona", "country" => "Spain", "phone" => "(555) 555-5555", "email" => "pM5Jav@example.com"),
            array("id" => 30, "name" => "Bob", "age" => 165, "city" => "Amsterdam", "country" => "Netherlands", "phone" => "(555) 555-5555", "email" => "pM5dJv@example.com"),
            array("id" => 31, "name" => "Charlie", "age" => 170, "city" => "Rome", "country" => "Italy", "phone" => "(555) 555-5555", "email" => "pM5Jv@example.com"),
            array("id" => 32, "name" => "David", "age" => 175, "city" => "Paris", "country" => "France", "phone" => "(555) 555-5555", "email" => "pMa5Jv@example.com"),
            array("id" => 33, "name" => "Emily", "age" => 180, "city" => "London", "country" => "UK", "phone" => "(555) 555-5555", "email" => "pMdJv@example.com"),
            array("id" => 34, "name" => "Frank", "age" => 185, "city" => "New York", "country" => "USA", "phone" => "(555) 555-5555", "email" => "pM5Jav@example.com"),
            array("id" => 35, "name" => "Grace", "age" => 190, "city" => "San Francisco", "country" => "USA", "phone" => "(555) 555-5555", "email" => "pM5rJv@example.com"),
            array("id" => 36, "name" => "Henry", "age" => 195, "city" => "Berlin", "country" => "Germany", "phone" => "(555) 555-5555", "email" => "peM5Jv@example.com"),
            array("id" => 37, "name" => "Ivy", "age" => 200, "city" => "Madrid", "country" => "Spain", "phone" => "(555) 555-5555", "email" => "pM5aJv@example.com"),
            array("id" => 38, "name" => "Jack", "age" => 205, "city" => "Barcelona", "country" => "Spain", "phone" => "(555) 555-5555", "email" => "pM5eJv@example.com"),
            array("id" => 39, "name" => "Kate", "age" => 210, "city" => "Amsterdam", "country" => "Netherlands", "phone" => "(555) 555-5555", "email" => "pM5dJv@example.com"),
            array("id" => 40, "name" => "Liam", "age" => 215, "city" => "Rome", "country" => "Italy", "phone" => "(555) 555-5555", "email" => "pM5Jav@example.com"),
            array("id" => 41, "name" => "Mason", "age" => 220, "city" => "Paris", "country" => "France", "phone" => "(555) 555-5555", "email" => "pMa5Jv@example.com"),
            array("id" => 42, "name" => "Olivia", "age" => 225, "city" => "London", "country" => "UK", "phone" => "(555) 555-5555", "email" => "pMdJv@example.com"),
            array("id" => 43, "name" => "Noah", "age" => 230, "city" => "New York", "country" => "USA", "phone" => "(555) 555-5555", "email" => "pM5Jav@example.com"),
            array("id" => 44, "name" => "Oliver", "age" => 235, "city" => "San Francisco", "country" => "USA", "phone" => "(555) 555-5555", "email" => "pM5rJv@example.com"),
        );

        return $data;
    }

    public function prepare_items() {
        $this->items = $this->wp_list_table_data();

        $columns = $this->get_columns();
       
        $hidden = $this->get_hidden_columns();
        $sortable = $this->get_sortable_columns();
        $this->_column_headers = array($columns, $hidden, $sortable);
    }

    public function get_columns() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'age' => 'Age',
            'city' => 'City',
            'country' => 'Country',
            'phone' => 'Phone',
            'email' => 'Email',
        );
    }

    public function column_default( $item, $column_name ) {
        switch ( $column_name ) {
            case 'id':
            case 'name':
            case 'age':
            case 'city':
            case 'country':
            case 'phone':
            case 'email':
                return $item[ $column_name ];
            default:
                return "No data";
        }
    }

    public function get_hidden_columns( ) {
           return array("phone");
    }

    public function get_sortable_columns() {
        return array(
            'id' => array('id', false),
            'name' => array('name', false),
            'age' => array('age', false),
            'city' => array('city', false),
            'country' => array('country', false),
            'phone' => array('phone', false),
            'email' => array('email', false),
        );
    }
}

function cb_show_data_list_table() {

    $table = new CB_DataTableList();
    $table->prepare_items();
    $table->search_box('search', 'search_id');
    $table->display();

}

cb_show_data_list_table();