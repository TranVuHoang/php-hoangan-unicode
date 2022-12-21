<?php
/**
 * 1. Validate form là gì?
 * - Xác thực dữ liệu trước khi xử lý
 * - validate form có 2 loại:
 *  + 1. validate cilent
 *      - HTML 5, Javascript
 *      - khi cần nâng cao sự trải nghiệm
 *  + 2. validate server
 *      - PHP
 *      - Ngăn client không validate được, thì bên server vẫn sẽ trả lại
 *
 * 2. Quy trình validate form
 *  - Bước 1: Xác định được rules (Field này => điều kiện là gì)
 *  - Bước 2: Xác định message (Tương ứng với rules)
 *  - Bước 3: Thực hiện validate
 * 
 * ex: form có thông tin của 1 người khách đăng ký tài khoản website
 * - Yêu cầu nhập các thông tin?
 * - Kiểm tra các thông tin nhập có hợp lệ không?
 * -
 *
 */