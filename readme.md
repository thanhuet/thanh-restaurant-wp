# Tài liệu cho Developer
 * Created: 12/09/2016 by Khoapq
 * Updated: 22/03/2017

# Gồm có:
	+ Shortcodes
	+ Sass
    + Js
	+ Customize
	+ Plugin required
	+ Demo data
	+ Gulp
    + PHP Custom function

# Shortcodes
- Cây thư mục giống như shortcode có tên "sample" hoặc "testimonials"
- Sửa lại file shortcodes.php
	+ Include shortcode trong function: load_shortcodes
- Tất cả images,js,sass đều viết trong shortcodes.
- Nếu file sass trong shortcode có dùng biến trong customize thì viết trong folder /shortcodes/ten-shortcode/assets/sass/_tenfile-options.scss
file này sẽ được tự động copy vào /assets/sass/shortcodes/_tenfile-options.scss và bạn cần file import nó vào file /assets/sass/_style-options.scss

# SASS
- Tên file bắt đầu bằng _tenfile.scss
- Những file sử dụng biến trong customize thì phải có dạng: _tenfile-options.scss
- File: style.scss sẽ tạo ra file style.css, thay đổi thông tin theme ở đây. import những gì liên quan đến style của theme vào đây
- File: _style-options.css đây là file sử dụng các biến trong theme customize. file này sẽ tạo ra file /wp-content/uploads/ten-theme.css
 (customize css trong customizer cũng được lưu vào cuối của file này)
* Thêm define( 'THIM_DEBUG', true ); vào file wp-config.php nếu muốn xem các biến trong customize, khi đó sẽ có 1 file mới được tạo ra là file: /assets/sass/_thim_customize.scss
Cần ignore file này trong git.

# JS
- Js đặt trong thư mục:
	/assets/js/
		+ libs : nơi chứa các thư viện js
			+ autoload : các file trong này sẽ được tự động load lên
			.... các thư viện ko muốn load lên tự động thì đặt trong đây.
		+ main.min.js : file này được tạo ra bởi tất cả các file có trong thư mục /libs/autoload, shortcodes/assets/js/autoload và file thim-custom.js (ngoài frontend chỉ load file này)
		+ thim-custom.js: Viết các function custom cho theme ở đây

# Customize
- Customize được base trên thằng kirki nên có thể sử dụng document ở đây https://aristath.github.io/kirki/
- Chú ý: với 2 type là image và upload thì đổi thành kirki-image và kirki-upload.
- Customize được viết trong folder: inc\admin\customizer-sections, chỉ cần theme 1 file php mới trong folder này nó sẽ tự động include.

# Required Plugins
- Viết trong file: inc\admin\plugins-require.php
- Chỉ require các plugin bắt buộc cho theme đó như
	+ thim-core
	+ thim-tentheme

# Demo data
- Demo data để trong folder:
inc\data\
	+ demos
		+ demo-01
			+ widget: sử dụng plugin "Widget Data - Setting Import/Export Plugin" để export
			+ content.xml : file này dùng tool->export trong wp-admin để tạo ra nó
			+ screenshot.jpg : ảnh của demo này
			+ settings.dat : Theme Dashboard >> For Developer để export file này
			+ theme_options.dat : Theme Dashboard >> For Developer để export file này
		+ demo-02
		+ demo-03
        + revsliders: các file export của slider.
	+ default.css : copy file wp-content/uploads/ten-theme.css sửa thành default.css và ném vào đây.
	+ demo_image.jpg : ảnh khi import demo chọn chế độ ko import ảnh thì dùng ảnh này cho tất cả các ảnh post/product/.v.v..
	+ demos.php : list các demo viết trong này. các plugin bắt buộc phải có khi sử dụng theme này. v.v...

# Gulp
- Để dịch Sass và gộp js cho theme, shortcodes thì cần cài đặt gulp trên folder thimpress-projects
- Tài liệu sử dụng và cài đặt gulp đã có ở cuối file glup trong thimpress-projects.

# PHP Custom Functions
- Các function trong theme cần được viết trong /inc/custom-functions.php




# Chú ý: Xóa (hoặc ignore) file này trước khi đẩy lên bitbucket