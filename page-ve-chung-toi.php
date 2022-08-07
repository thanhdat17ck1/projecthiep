<?php 
    get_header('sub');
?>

<main class="p-about">
    <div id="page-banner-about" class="page-banner">
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Về chúng tôi</h2>
            </div>
        </div>
    </div>
    <div class="content l-container">
        <div>
            Nhóm các công ty của Zeal (gọi chung là Tập đoàn Zeal) là một danh mục đầu tư kinh doanh bao gồm các tổ chức
            tài chính được điều tiết (tên giao dịch là ZFX) và các công ty công nghệ tài chính chuyên về các giải pháp
            thanh khoản đa tài sản tại các thị trường được điều tiết, được hỗ trợ bởi công nghệ độc quyền, có mặt tại
            nhiều khu vực chính trên toàn cầu.Zeal được thành lập bởi 1 nhóm các nhà giao dịch kỳ cựu với nhiều thập kỉ
            kinh nghiệm trong ngành. Họ là những người không chỉ có tiếng nói chung về sự thể hiện phức tạp của giới
            giao dịch tài chính, mà còn có chuyên môn và cam kết luôn đổi mới. Zeal có lý do tồn tại sâu xa và đặt mục
            tiêu mang lại dịch vụ giao dịch đa tài sản ở cấp độ cao hơn đến với các nhà đầu tư bán lẻ, các cơ quan, tổ
            chức.<br>
            Với việc không chủ động giả định rủi ro thị trường, ZFX luôn tập trung vào việc tìm ra các mức giá tốt nhất
            trên thị trường các khách hàng tổ chức bằng cách sử dụng công nghệ vượt trội và cung cấp các dịch vụ kinh
            doanh tốt nhất nhằm đảm bảo rằng kết quả đầu ra của mọi giao dịch thực hiện tại Zeal chính là kết quả được
            xác định bởi thị trường. Tính minh bạch trong việc định giá đảm bảo rằng các dịch vụ môi giới của Zeal được
            bù đắp bằng các khoản kê giá.
        </div>
        <section class="lienhe">
            <h3 class="u-center">LIÊN HỆ CHÚNG TÔI</h3>
            <p class="u-center">
                Phản hồi của bạn là món quà lớn nhất của chúng tôi, <br>
                chúng tôi sẽ trả lời tin nhắn của bạn sớm nhất có thể, cảm ơn bạn!
            </p>
            <div>
                <form action="" method="POST" class="c-form">
                    <div class="c-form__row c-form__row--error">
                        <label for="name">Your name</label>
                        <input type="text" id="name" name="name" value="" placeholder="Enter your name">
                        <span>This field cannot be left blank</span>
                    </div>
                    <div class="c-form__row">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" value="" placeholder="Enter mail">
                    </div>
                    <div class="c-form__row">
                        <label for="message">Information</label>
                        <textarea name="message" id="message" placeholder="Enter your message"></textarea>
                    </div>
                    <input type="submit" value="Send message" id="submit" class="c-form__submit">
                </form>
            </div>
        </section>
    </div>
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1959.6253112565662!2d106.721479!3d10.792107!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5a4fef78ffd64b31!2sVinhomes%20Central%20Park%20-%20Park%207!5e0!3m2!1svi!2sus!4v1659535158836!5m2!1svi!2sus"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</main>


<?php
    get_footer();
?>