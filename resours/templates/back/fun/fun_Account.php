<?php

function get_account_info($name){
    $id = $_SESSION['id_user'];
    $query = query("SELECT * FROM users WHERE id = '$id'");
    confirm($query);
    $row = fetch_array($query);
return $row[$name];

}



function get_khdama(){
    $query = query("SELECT * FROM users WHERE roll = 'Moderator'");
    confirm($query);

while ($row = fetch_array($query)) {

        $users = <<<DELIMETER
                                 <tr>
                                    <td>
                                        <div class="m-r-10"><img src="{$row['image']}" alt="user" width="35"></div>
                                    </td>
                                    <td>{$row['username']}</td>
                                    <td>
                                   {$row['phone']}
                                    </td>
                                    <td>{$row['monthly']} DH</td>
                                    <td>{$row['status']}</td>
                                    <td>{$row['date_beginning']}</td>
                                    <td>
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="true">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="index?user={$row['id']}" class="dropdown-item">View Profile</a>
                                                <!-- item-->
                                                <a href="index?user={$row['id']}" class="dropdown-item">Edite</a>
                                                <!-- item-->
                                                <a href="index?user={$row['id']}&&delete" class="dropdown-item">Delete</a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
DELIMETER;

echo $users;

}
}













?>