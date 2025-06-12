function nothing(){
    return false;
}

function checkDatabaseConnection() {
    // Hiển thị trạng thái loading
    const btnLogin = document.getElementById("btnCheck");
    const originalText = btnLogin.innerHTML;
    btnLogin.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Đang kiểm tra...';
    btnLogin.disabled = true;

    // Gọi AJAX đến endpoint kiểm tra kết nối
    fetch('login.php?method=checkConnect')
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: 'Kết nối thành công',
                    text: 'Hệ thống đã sẵn sàng',
                    footer: `MySQL Server: ${data.server_info}`,
                    timer: 3000
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi kết nối',
                    text: data.message,
                    footer: 'Vui lòng liên hệ quản trị viên',
                    timer: 5000
                });
            }
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: 'Lỗi hệ thống',
                text: 'Không thể kết nối đến máy chủ: ' + error,
                footer: 'Kiểm tra lại kết nối mạng',
                timer: 5000
            });
        })
        .finally(() => {
            // Khôi phục trạng thái ban đầu của nút
            btnLogin.innerHTML = originalText;
            btnLogin.disabled = false;
        });
}

// Gán sự kiện click cho nút (hoặc gọi khi cần)
document.getElementById("btnCheck").addEventListener("click", function(e) {
    e.preventDefault();
    checkDatabaseConnection();
});