<?php
use Page\Acceptance\LoginPage;
use Step\Acceptance\LoginStep;

class LoginCest
{
    // Bài kiểm thử kiểm tra khi đăng nhập thành công, truyền vào các đối tượng `LoginStep` và `LoginPage`
    public function show_home_page_when_data_login_successfully(LoginStep $loginStep, LoginPage $loginPage)
    {
        // Bước 1: Gọi phương thức `login()` từ đối tượng `LoginStep` để thực hiện đăng nhập với thông tin tài khoản 'hangtt@gmail.com' và mật khẩu '123456789'.
        $loginStep->login('hangtt@gmail.com', '123456789');
        
        // Bước 2: Gọi phương thức `checkRememberMe()` từ đối tượng `LoginPage` để chọn tùy chọn "Remember Me".
        $loginPage->checkRememberMe();
        
        // Bước 3: Gọi phương thức `clickLoginButton()` từ đối tượng `LoginPage` để thực hiện đăng nhập bằng cách nhấp vào nút "Login".
        $loginPage->clickLoginButton();
        
        // Bước 4: Gọi phương thức `retrySee('Dashboard')` từ đối tượng `LoginStep` để kiểm tra xem trang "Dashboard" có hiển thị sau khi đăng nhập thành công hay không.
        $loginStep->retrySee('Dashboard');
    }
}