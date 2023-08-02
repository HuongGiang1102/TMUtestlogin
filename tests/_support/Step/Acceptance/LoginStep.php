<?php
namespace Step\Acceptance;

use Page\Acceptance\LoginPage;

class LoginStep extends \AcceptanceTester
{
    // Đoạn code trên khai báo lớp "LoginStep" kế thừa từ lớp "AcceptanceTester", 
    // cho phép sử dụng các phương thức và tính năng có sẵn trong lớp "AcceptanceTester".

    public function login($email, $password)
    {
        // Phương thức "login" dùng để thực hiện hành động đăng nhập vào trang web.

        $loginPage = new LoginPage($this);
        // Tạo một đối tượng "LoginPage" và truyền đối tượng "AcceptanceTester" (chính là lớp "LoginStep") vào constructor.

        $loginPage->onPage()
            // Gọi phương thức "onPage" trong đối tượng "LoginPage". Phương thức này sẽ đảm bảo rằng trình duyệt đang nằm ở trang đăng nhập.
            // Nếu trình duyệt không nằm ở trang đăng nhập, phương thức sẽ chuyển đến trang đăng nhập.
            
            ->fillEmail($email)
            // Gọi phương thức "fillEmail" trong đối tượng "LoginPage" để điền giá trị email vào trường email.

            ->fillPassword($password);
            // Gọi phương thức "fillPassword" trong đối tượng "LoginPage" để điền giá trị password vào trường password.
    }
}


