/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : qlybanhang

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 03/07/2021 09:17:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for binh_luan_bai_viet
-- ----------------------------
DROP TABLE IF EXISTS `binh_luan_bai_viet`;
CREATE TABLE `binh_luan_bai_viet`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `bai_viet_id` int NOT NULL,
  `noi_dung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `nguoi_dung_id` int NULL DEFAULT NULL,
  `tra_loi` int NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of binh_luan_bai_viet
-- ----------------------------
INSERT INTO `binh_luan_bai_viet` VALUES (1, 1, 'bình luận bài 1', 1, NULL, '2021-04-09 21:05:06', NULL, NULL);
INSERT INTO `binh_luan_bai_viet` VALUES (2, 1, 'Tao tra loi  m ne`', 2, 1, '2021-04-09 21:05:32', NULL, NULL);
INSERT INTO `binh_luan_bai_viet` VALUES (3, 1, 'bình luận vài 1.3', 3, NULL, '2021-04-09 21:05:49', NULL, NULL);
INSERT INTO `binh_luan_bai_viet` VALUES (4, 3, 'assssssssssssssssssssssssssss', 1, NULL, '2021-05-10 10:17:16', '2021-05-10 10:17:16', NULL);
INSERT INTO `binh_luan_bai_viet` VALUES (5, 1, 'asddddddddddddddddddddasdasdsad', 1, NULL, '2021-05-10 10:17:26', '2021-05-10 10:17:26', NULL);
INSERT INTO `binh_luan_bai_viet` VALUES (6, 1, 'asssssssssssssssssssssss', 1, NULL, '2021-05-10 10:18:29', '2021-05-10 10:18:29', NULL);
INSERT INTO `binh_luan_bai_viet` VALUES (7, 1, 'aaaaaaaaaaaaaaaaaa', 1, NULL, '2021-05-10 10:18:46', '2021-05-10 10:18:46', NULL);
INSERT INTO `binh_luan_bai_viet` VALUES (8, 1, 'aaaaaaaaaaaaaaaaaaa', 1, 3, '2021-05-10 10:21:39', '2021-05-10 10:21:39', NULL);

-- ----------------------------
-- Table structure for blog
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tieu_de` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tom_tat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `noi_dung` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tac_gia` int NULL DEFAULT NULL,
  `loai` int NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `anh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of blog
-- ----------------------------
INSERT INTO `blog` VALUES (1, 'Bài viết 1', 'Với các đặc điểm từ sự gọn gàng, thanh tao trong thiết kế cũng như khả năng cho ra nước tinh khiết đun sôi ở những mức nhiệt độ chính xác, chiếc máy này không chỉ hướng tới sử dụng tại các văn phòng thuần túy mà còn cả những gia đình trẻ có em bé[...]', '<p class=\'blog-content\'> Với các đặc điểm từ sự gọn gàng, thanh tao trong thiết kế cũng như khả năng cho ra nước tinh\r\n    khiết đun sôi ở những mức nhiệt độ chính xác, chiếc máy này không chỉ hướng tới sử dụng tại các văn phòng thuần túy\r\n    mà còn cả những gia đình trẻ có em bé (để pha sữa) và những người lớn tuổi hoặc có nhu cầu khắt khe trong việc\r\n    thưởng thức các loại trà, cà phê,... một cách đúng điệu. </p>\r\n<p class=\'blog-content\'> Philips - thương hiệu nổi tiếng đến từ Hà Lan đã quá quen thuộc với chúng ta qua nhiều ngành\r\n    khác nhau, đa dạng các thiết bị gia dụng, từ nồi chiên, bàn ủi, máy xay, đèn v.v… Philips ADD6910 là sản phẩm mới\r\n    nhất của Philips Water, bên cạnh những sản phẩm lọc nước khác ra mắt trước giờ như lọc nước RO để gầm, máy lọc RO\r\n    dạng đứng, bộ lọc nước vòi sen,... - một số thí dụ trong chuỗi các giải pháp lọc nước thông minh và toàn diện nhu\r\n    cầu. </p>\r\n<p class=\'blog-content\'> Về thiết kế </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_1.jpg\" alt=\'\'> </div> Máy lọc nước để\r\nbàn RO Philips ADD6910 có thiết kế hình tháp, tổng thể màu trắng tương tự một chiếc máy pha cà phê để trong các văn\r\nphòng hiện đại. Kích thước tổng thể vào khoảng 232*250*424mm nên theo mình cũng sẽ không chiếm quá nhiều diện tích, từ\r\nđó tăng tính linh hoạt hơn khi sắp xếp bố trí. <div class=\'blog-img\'> <img\r\n        src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_2.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Bề mặt trước của máy là một bảng điều khiển cảm ứng với đèn nền nhẹ nhàng bên dưới. Mình đánh\r\n    giá cao chỗ này, tuy là một điểm nhỏ nhưng sẽ hữu ích trong các tình huống như đặt máy trong phòng để pha sữa cho em\r\n    bé vào ban đêm sẽ dễ nhận diện chính xác vị trí các nút bấm hơn. </p>\r\n<p class=\'blog-content\'> Chi tiết hơn về các nút bấm và thông qua đó cũng sẽ thể hiện rõ tính năng hoạt động của máy,\r\n    chúng ta sẽ có các mức nhiệt độ: </p>\r\n<p class=\'blog-content\'> Ambient: nước nhiệt độ phòng </p>\r\n<p class=\'blog-content\'> 45 độ: Thích hợp pha sữa cho bé, không cần pha nước hoặc để nguội nước theo cách truyền thống,\r\n    từ đó rất tiết kiệm thời gian pha sữa khi bé bị đói mà vẫn đảm bảo pha đúng, không bị vón cục sữa do quá nóng hoặc\r\n    quá lạnh khiến sữa không chín. </p>\r\n<p class=\'blog-content\'> 85 độ: Thích hợp pha trà/cafe bởi theo các nghiên cứu đã chỉ ra, nếu pha nước sôi quá nhiệt sẽ\r\n    khiến hỏng vị nguyên thủy vốn có của trà, khiến các lá trà nát hơn và cũng gắt vị hơn. Mặt khác, nước được lọc từ RO\r\n    sẽ tinh khiết, không có các tạp vị khác của nước thường, vị trà hoặc cafe giữ được độ nguyên chất. </p>\r\n<p class=\'blog-content\'> 95 độ: Thích hợp để nấu mì gói (mình thích phần này dã man bởi việc nấu nước và ngồi đợi là một\r\n    trong những rào cản lớn khiến mình thà để bụng đói đêm khuya thay vì phải đi nấu mì 😔) </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_3.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Một trong những điểm mình thích ở cách bố trí nút chính là việc các nấc nhiệt độ được nâng lên\r\n    cao dần, cao nhất ở trên cùng nên cũng sẽ hạn chế được tối đa việc trẻ nhỏ vô tình chạm vào. Mặt khác, để lấy được\r\n    nước nóng từ 45 độ thì trước khi chạm vào núm lấy nước phải bấm vào biểu tượng khóa trẻ em trước (nút hình ổ khóa),\r\n    từ đó đảm bảo an toàn hơn, chống chạm nhầm gây nguy hiểm. </p>\r\n<p class=\'blog-content\'> Lõi lọc và nguồn nước </p>\r\n<p class=\'blog-content\'> Vị trí mặt bên trên sẽ là một nắp đậy chứa lõi lọc bên trong. Khi muốn lấy lõi lọc ra chúng ta\r\n    chỉ cần bấm nút vào, sau đó xoay ngược chiều kim đồng hồ và rút lên, cực kỳ đơn giản. Với thiết kế đơn giản như thế\r\n    này, việc thay lõi sẽ cực kỳ đơn giản và không chỉ nam mà cả chị em phụ nữ cũng có thể dễ dàng làm được. </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_4.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Bình nước phía sau có dung tích là 4 lít. Chúng ta có thể refill nước vào ngay tại chỗ hoặc\r\n    xách phần bình này đi ra ngoài để lấy nước và cho trở lại máy là xong. Đây không chỉ là bình chứa nước thông thường\r\n    mà ngoài ra, đó còn là nơi chứa nước đi ra sau khi trải qua chu trình lọc RO. Đây chính là một trong những điểm mấu\r\n    chốt để đảm bảo không cần đấu nối dây phức tạp. Bên trong máy sẽ có cảm biến và một khi lượng chất rắn vượt quá\r\n    ngưỡng cho phép thì hệ thống sẽ báo để người dùng biết và xả bỏ toàn bộ nước ra ngoài (trong tình huống refill nước\r\n    trực tiếp vào). </p>\r\n<p class=\'blog-content\'> Công nghệ lọc và chi phí </p>\r\n    <div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_5.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Philips Water cho biết chiếc máy này sử dụng công nghệ Lõi lọc 5 trong 1 sản xuất tại Nhật, đáp\r\n    ứng nước uống tinh khiết với 1 quy trình lọc duy nhất. Bước lọc RO cho nước ra là hoàn toàn tinh khiết, đồng thời sẽ\r\n    được cho đi qua đèn UV để khử trùng, diệt sạch vi khuẩn, virus, chống tái nhiễm khuẩn nên đảm bảo tuyệt đối an toàn.\r\n</p>\r\n<p class=\'blog-content\'> Hiệu suất lọc RO đạt tỷ lệ 3:1, tiết kiệm hơn so với nhiều chiếc máy khác trên thị trường. Bình\r\n    nước có cảm biến báo khi nào phải xả đổ nước khi quá bẩn. Nước được cho chảy qua lõi đun với tốc độ 3s, tiết kiệm\r\n    điện so với giải pháp đun bình, nhờ đó trong tình huống cần sử dụng ngay, thí dụ như pha sữa cho em bé đang đói thì\r\n    sẽ không cần phải tốn thời gian chờ đợi, đặc biệt là đối với anh em vừa có con nhỏ và thời gian bú sữa thì \'mệt\'\r\n    nhất là vào ban đêm. </p>\r\n<p class=\'blog-content\'> Nhà sản xuất cho biết lõi lọc có tuổi thọ là 1 năm thay một lần. Trong một phép tính, giả sử\r\n    mỗi năm trung bình hộ gia đình sử dụng 2.000 lít nước, xấp xỉ 5 lít nước mỗi ngày. Suy ra trong 6 năm sẽ cần 12.000\r\n    lít nước tương đương với 5 lần thay lõi lọc với giá 2,1 triệu đồng mỗi lõi. Hoặc 649 bình nước 18.5 lít tiêu chuẩn.\r\n    Giá 1 bình nước 18.5 lít khoảng 50.000 VND. Qua đó tiết kiệm 67%, tương đương với gần 22 triệu tiết kiệm cho chi phí\r\n    nước uống cho gia đình trong 6 năm. </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_6.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Như vậy, với những đặc điểm về mặt thiết kế, hoàn thiện, cách thức vận hành, hiệu suất lọc,\r\n    chất lượng nước và cả yếu tố chi phí, chiếc máy lọc nước để bàn RO Philips ADD6910 của Philips Water sẽ là một trong\r\n    những lựa chọn đáng lưu ý cho những không gian văn phòng, working space đề cao tính thẩm mỹ, gọn gàng, tiện dụng,\r\n    đồng thời những gia đình có trẻ nhỏ hoặc những ai có yêu cầu cao về mặt thưởng thức đồ uống, điển hình như người lớn\r\n    tuổi,... </p>\r\n', '2021-04-09 18:20:37', NULL, 1, 1, NULL, 'assets/img/blog/tin_tuc1/anh_dai_dien_tin_tuc_1.jpg', 'bai-viet-1');
INSERT INTO `blog` VALUES (2, 'Bài viết 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus. Vestibulum a', '<p class=\'blog-content\'> Với các đặc điểm từ sự gọn gàng, thanh tao trong thiết kế cũng như khả năng cho ra nước tinh\r\n    khiết đun sôi ở những mức nhiệt độ chính xác, chiếc máy này không chỉ hướng tới sử dụng tại các văn phòng thuần túy\r\n    mà còn cả những gia đình trẻ có em bé (để pha sữa) và những người lớn tuổi hoặc có nhu cầu khắt khe trong việc\r\n    thưởng thức các loại trà, cà phê,... một cách đúng điệu. </p>\r\n<p class=\'blog-content\'> Philips - thương hiệu nổi tiếng đến từ Hà Lan đã quá quen thuộc với chúng ta qua nhiều ngành\r\n    khác nhau, đa dạng các thiết bị gia dụng, từ nồi chiên, bàn ủi, máy xay, đèn v.v… Philips ADD6910 là sản phẩm mới\r\n    nhất của Philips Water, bên cạnh những sản phẩm lọc nước khác ra mắt trước giờ như lọc nước RO để gầm, máy lọc RO\r\n    dạng đứng, bộ lọc nước vòi sen,... - một số thí dụ trong chuỗi các giải pháp lọc nước thông minh và toàn diện nhu\r\n    cầu. </p>\r\n<p class=\'blog-content\'> Về thiết kế </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_1.jpg\" alt=\'\'> </div> Máy lọc nước để\r\nbàn RO Philips ADD6910 có thiết kế hình tháp, tổng thể màu trắng tương tự một chiếc máy pha cà phê để trong các văn\r\nphòng hiện đại. Kích thước tổng thể vào khoảng 232*250*424mm nên theo mình cũng sẽ không chiếm quá nhiều diện tích, từ\r\nđó tăng tính linh hoạt hơn khi sắp xếp bố trí. <div class=\'blog-img\'> <img\r\n        src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_2.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Bề mặt trước của máy là một bảng điều khiển cảm ứng với đèn nền nhẹ nhàng bên dưới. Mình đánh\r\n    giá cao chỗ này, tuy là một điểm nhỏ nhưng sẽ hữu ích trong các tình huống như đặt máy trong phòng để pha sữa cho em\r\n    bé vào ban đêm sẽ dễ nhận diện chính xác vị trí các nút bấm hơn. </p>\r\n<p class=\'blog-content\'> Chi tiết hơn về các nút bấm và thông qua đó cũng sẽ thể hiện rõ tính năng hoạt động của máy,\r\n    chúng ta sẽ có các mức nhiệt độ: </p>\r\n<p class=\'blog-content\'> Ambient: nước nhiệt độ phòng </p>\r\n<p class=\'blog-content\'> 45 độ: Thích hợp pha sữa cho bé, không cần pha nước hoặc để nguội nước theo cách truyền thống,\r\n    từ đó rất tiết kiệm thời gian pha sữa khi bé bị đói mà vẫn đảm bảo pha đúng, không bị vón cục sữa do quá nóng hoặc\r\n    quá lạnh khiến sữa không chín. </p>\r\n<p class=\'blog-content\'> 85 độ: Thích hợp pha trà/cafe bởi theo các nghiên cứu đã chỉ ra, nếu pha nước sôi quá nhiệt sẽ\r\n    khiến hỏng vị nguyên thủy vốn có của trà, khiến các lá trà nát hơn và cũng gắt vị hơn. Mặt khác, nước được lọc từ RO\r\n    sẽ tinh khiết, không có các tạp vị khác của nước thường, vị trà hoặc cafe giữ được độ nguyên chất. </p>\r\n<p class=\'blog-content\'> 95 độ: Thích hợp để nấu mì gói (mình thích phần này dã man bởi việc nấu nước và ngồi đợi là một\r\n    trong những rào cản lớn khiến mình thà để bụng đói đêm khuya thay vì phải đi nấu mì 😔) </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_3.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Một trong những điểm mình thích ở cách bố trí nút chính là việc các nấc nhiệt độ được nâng lên\r\n    cao dần, cao nhất ở trên cùng nên cũng sẽ hạn chế được tối đa việc trẻ nhỏ vô tình chạm vào. Mặt khác, để lấy được\r\n    nước nóng từ 45 độ thì trước khi chạm vào núm lấy nước phải bấm vào biểu tượng khóa trẻ em trước (nút hình ổ khóa),\r\n    từ đó đảm bảo an toàn hơn, chống chạm nhầm gây nguy hiểm. </p>\r\n<p class=\'blog-content\'> Lõi lọc và nguồn nước </p>\r\n<p class=\'blog-content\'> Vị trí mặt bên trên sẽ là một nắp đậy chứa lõi lọc bên trong. Khi muốn lấy lõi lọc ra chúng ta\r\n    chỉ cần bấm nút vào, sau đó xoay ngược chiều kim đồng hồ và rút lên, cực kỳ đơn giản. Với thiết kế đơn giản như thế\r\n    này, việc thay lõi sẽ cực kỳ đơn giản và không chỉ nam mà cả chị em phụ nữ cũng có thể dễ dàng làm được. </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_4.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Bình nước phía sau có dung tích là 4 lít. Chúng ta có thể refill nước vào ngay tại chỗ hoặc\r\n    xách phần bình này đi ra ngoài để lấy nước và cho trở lại máy là xong. Đây không chỉ là bình chứa nước thông thường\r\n    mà ngoài ra, đó còn là nơi chứa nước đi ra sau khi trải qua chu trình lọc RO. Đây chính là một trong những điểm mấu\r\n    chốt để đảm bảo không cần đấu nối dây phức tạp. Bên trong máy sẽ có cảm biến và một khi lượng chất rắn vượt quá\r\n    ngưỡng cho phép thì hệ thống sẽ báo để người dùng biết và xả bỏ toàn bộ nước ra ngoài (trong tình huống refill nước\r\n    trực tiếp vào). </p>\r\n<p class=\'blog-content\'> Công nghệ lọc và chi phí </p>\r\n    <div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_5.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Philips Water cho biết chiếc máy này sử dụng công nghệ Lõi lọc 5 trong 1 sản xuất tại Nhật, đáp\r\n    ứng nước uống tinh khiết với 1 quy trình lọc duy nhất. Bước lọc RO cho nước ra là hoàn toàn tinh khiết, đồng thời sẽ\r\n    được cho đi qua đèn UV để khử trùng, diệt sạch vi khuẩn, virus, chống tái nhiễm khuẩn nên đảm bảo tuyệt đối an toàn.\r\n</p>\r\n<p class=\'blog-content\'> Hiệu suất lọc RO đạt tỷ lệ 3:1, tiết kiệm hơn so với nhiều chiếc máy khác trên thị trường. Bình\r\n    nước có cảm biến báo khi nào phải xả đổ nước khi quá bẩn. Nước được cho chảy qua lõi đun với tốc độ 3s, tiết kiệm\r\n    điện so với giải pháp đun bình, nhờ đó trong tình huống cần sử dụng ngay, thí dụ như pha sữa cho em bé đang đói thì\r\n    sẽ không cần phải tốn thời gian chờ đợi, đặc biệt là đối với anh em vừa có con nhỏ và thời gian bú sữa thì \'mệt\'\r\n    nhất là vào ban đêm. </p>\r\n<p class=\'blog-content\'> Nhà sản xuất cho biết lõi lọc có tuổi thọ là 1 năm thay một lần. Trong một phép tính, giả sử\r\n    mỗi năm trung bình hộ gia đình sử dụng 2.000 lít nước, xấp xỉ 5 lít nước mỗi ngày. Suy ra trong 6 năm sẽ cần 12.000\r\n    lít nước tương đương với 5 lần thay lõi lọc với giá 2,1 triệu đồng mỗi lõi. Hoặc 649 bình nước 18.5 lít tiêu chuẩn.\r\n    Giá 1 bình nước 18.5 lít khoảng 50.000 VND. Qua đó tiết kiệm 67%, tương đương với gần 22 triệu tiết kiệm cho chi phí\r\n    nước uống cho gia đình trong 6 năm. </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_6.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Như vậy, với những đặc điểm về mặt thiết kế, hoàn thiện, cách thức vận hành, hiệu suất lọc,\r\n    chất lượng nước và cả yếu tố chi phí, chiếc máy lọc nước để bàn RO Philips ADD6910 của Philips Water sẽ là một trong\r\n    những lựa chọn đáng lưu ý cho những không gian văn phòng, working space đề cao tính thẩm mỹ, gọn gàng, tiện dụng,\r\n    đồng thời những gia đình có trẻ nhỏ hoặc những ai có yêu cầu cao về mặt thưởng thức đồ uống, điển hình như người lớn\r\n    tuổi,... </p>\r\n', '2021-04-09 18:20:37', NULL, 2, 1, NULL, '', 'bai-viet-2');
INSERT INTO `blog` VALUES (3, 'Bài viết 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus. Vestibulum a', '<p class=\'blog-content\'> Với các đặc điểm từ sự gọn gàng, thanh tao trong thiết kế cũng như khả năng cho ra nước tinh\r\n    khiết đun sôi ở những mức nhiệt độ chính xác, chiếc máy này không chỉ hướng tới sử dụng tại các văn phòng thuần túy\r\n    mà còn cả những gia đình trẻ có em bé (để pha sữa) và những người lớn tuổi hoặc có nhu cầu khắt khe trong việc\r\n    thưởng thức các loại trà, cà phê,... một cách đúng điệu. </p>\r\n<p class=\'blog-content\'> Philips - thương hiệu nổi tiếng đến từ Hà Lan đã quá quen thuộc với chúng ta qua nhiều ngành\r\n    khác nhau, đa dạng các thiết bị gia dụng, từ nồi chiên, bàn ủi, máy xay, đèn v.v… Philips ADD6910 là sản phẩm mới\r\n    nhất của Philips Water, bên cạnh những sản phẩm lọc nước khác ra mắt trước giờ như lọc nước RO để gầm, máy lọc RO\r\n    dạng đứng, bộ lọc nước vòi sen,... - một số thí dụ trong chuỗi các giải pháp lọc nước thông minh và toàn diện nhu\r\n    cầu. </p>\r\n<p class=\'blog-content\'> Về thiết kế </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_1.jpg\" alt=\'\'> </div> Máy lọc nước để\r\nbàn RO Philips ADD6910 có thiết kế hình tháp, tổng thể màu trắng tương tự một chiếc máy pha cà phê để trong các văn\r\nphòng hiện đại. Kích thước tổng thể vào khoảng 232*250*424mm nên theo mình cũng sẽ không chiếm quá nhiều diện tích, từ\r\nđó tăng tính linh hoạt hơn khi sắp xếp bố trí. <div class=\'blog-img\'> <img\r\n        src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_2.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Bề mặt trước của máy là một bảng điều khiển cảm ứng với đèn nền nhẹ nhàng bên dưới. Mình đánh\r\n    giá cao chỗ này, tuy là một điểm nhỏ nhưng sẽ hữu ích trong các tình huống như đặt máy trong phòng để pha sữa cho em\r\n    bé vào ban đêm sẽ dễ nhận diện chính xác vị trí các nút bấm hơn. </p>\r\n<p class=\'blog-content\'> Chi tiết hơn về các nút bấm và thông qua đó cũng sẽ thể hiện rõ tính năng hoạt động của máy,\r\n    chúng ta sẽ có các mức nhiệt độ: </p>\r\n<p class=\'blog-content\'> Ambient: nước nhiệt độ phòng </p>\r\n<p class=\'blog-content\'> 45 độ: Thích hợp pha sữa cho bé, không cần pha nước hoặc để nguội nước theo cách truyền thống,\r\n    từ đó rất tiết kiệm thời gian pha sữa khi bé bị đói mà vẫn đảm bảo pha đúng, không bị vón cục sữa do quá nóng hoặc\r\n    quá lạnh khiến sữa không chín. </p>\r\n<p class=\'blog-content\'> 85 độ: Thích hợp pha trà/cafe bởi theo các nghiên cứu đã chỉ ra, nếu pha nước sôi quá nhiệt sẽ\r\n    khiến hỏng vị nguyên thủy vốn có của trà, khiến các lá trà nát hơn và cũng gắt vị hơn. Mặt khác, nước được lọc từ RO\r\n    sẽ tinh khiết, không có các tạp vị khác của nước thường, vị trà hoặc cafe giữ được độ nguyên chất. </p>\r\n<p class=\'blog-content\'> 95 độ: Thích hợp để nấu mì gói (mình thích phần này dã man bởi việc nấu nước và ngồi đợi là một\r\n    trong những rào cản lớn khiến mình thà để bụng đói đêm khuya thay vì phải đi nấu mì 😔) </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_3.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Một trong những điểm mình thích ở cách bố trí nút chính là việc các nấc nhiệt độ được nâng lên\r\n    cao dần, cao nhất ở trên cùng nên cũng sẽ hạn chế được tối đa việc trẻ nhỏ vô tình chạm vào. Mặt khác, để lấy được\r\n    nước nóng từ 45 độ thì trước khi chạm vào núm lấy nước phải bấm vào biểu tượng khóa trẻ em trước (nút hình ổ khóa),\r\n    từ đó đảm bảo an toàn hơn, chống chạm nhầm gây nguy hiểm. </p>\r\n<p class=\'blog-content\'> Lõi lọc và nguồn nước </p>\r\n<p class=\'blog-content\'> Vị trí mặt bên trên sẽ là một nắp đậy chứa lõi lọc bên trong. Khi muốn lấy lõi lọc ra chúng ta\r\n    chỉ cần bấm nút vào, sau đó xoay ngược chiều kim đồng hồ và rút lên, cực kỳ đơn giản. Với thiết kế đơn giản như thế\r\n    này, việc thay lõi sẽ cực kỳ đơn giản và không chỉ nam mà cả chị em phụ nữ cũng có thể dễ dàng làm được. </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_4.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Bình nước phía sau có dung tích là 4 lít. Chúng ta có thể refill nước vào ngay tại chỗ hoặc\r\n    xách phần bình này đi ra ngoài để lấy nước và cho trở lại máy là xong. Đây không chỉ là bình chứa nước thông thường\r\n    mà ngoài ra, đó còn là nơi chứa nước đi ra sau khi trải qua chu trình lọc RO. Đây chính là một trong những điểm mấu\r\n    chốt để đảm bảo không cần đấu nối dây phức tạp. Bên trong máy sẽ có cảm biến và một khi lượng chất rắn vượt quá\r\n    ngưỡng cho phép thì hệ thống sẽ báo để người dùng biết và xả bỏ toàn bộ nước ra ngoài (trong tình huống refill nước\r\n    trực tiếp vào). </p>\r\n<p class=\'blog-content\'> Công nghệ lọc và chi phí </p>\r\n    <div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_5.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Philips Water cho biết chiếc máy này sử dụng công nghệ Lõi lọc 5 trong 1 sản xuất tại Nhật, đáp\r\n    ứng nước uống tinh khiết với 1 quy trình lọc duy nhất. Bước lọc RO cho nước ra là hoàn toàn tinh khiết, đồng thời sẽ\r\n    được cho đi qua đèn UV để khử trùng, diệt sạch vi khuẩn, virus, chống tái nhiễm khuẩn nên đảm bảo tuyệt đối an toàn.\r\n</p>\r\n<p class=\'blog-content\'> Hiệu suất lọc RO đạt tỷ lệ 3:1, tiết kiệm hơn so với nhiều chiếc máy khác trên thị trường. Bình\r\n    nước có cảm biến báo khi nào phải xả đổ nước khi quá bẩn. Nước được cho chảy qua lõi đun với tốc độ 3s, tiết kiệm\r\n    điện so với giải pháp đun bình, nhờ đó trong tình huống cần sử dụng ngay, thí dụ như pha sữa cho em bé đang đói thì\r\n    sẽ không cần phải tốn thời gian chờ đợi, đặc biệt là đối với anh em vừa có con nhỏ và thời gian bú sữa thì \'mệt\'\r\n    nhất là vào ban đêm. </p>\r\n<p class=\'blog-content\'> Nhà sản xuất cho biết lõi lọc có tuổi thọ là 1 năm thay một lần. Trong một phép tính, giả sử\r\n    mỗi năm trung bình hộ gia đình sử dụng 2.000 lít nước, xấp xỉ 5 lít nước mỗi ngày. Suy ra trong 6 năm sẽ cần 12.000\r\n    lít nước tương đương với 5 lần thay lõi lọc với giá 2,1 triệu đồng mỗi lõi. Hoặc 649 bình nước 18.5 lít tiêu chuẩn.\r\n    Giá 1 bình nước 18.5 lít khoảng 50.000 VND. Qua đó tiết kiệm 67%, tương đương với gần 22 triệu tiết kiệm cho chi phí\r\n    nước uống cho gia đình trong 6 năm. </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_6.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Như vậy, với những đặc điểm về mặt thiết kế, hoàn thiện, cách thức vận hành, hiệu suất lọc,\r\n    chất lượng nước và cả yếu tố chi phí, chiếc máy lọc nước để bàn RO Philips ADD6910 của Philips Water sẽ là một trong\r\n    những lựa chọn đáng lưu ý cho những không gian văn phòng, working space đề cao tính thẩm mỹ, gọn gàng, tiện dụng,\r\n    đồng thời những gia đình có trẻ nhỏ hoặc những ai có yêu cầu cao về mặt thưởng thức đồ uống, điển hình như người lớn\r\n    tuổi,... </p>\r\n', '2021-04-09 18:20:37', NULL, 1, 2, NULL, '', 'bai-viet-3');
INSERT INTO `blog` VALUES (4, 'Bài viết 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus. Vestibulum a', '<p class=\'blog-content\'> Với các đặc điểm từ sự gọn gàng, thanh tao trong thiết kế cũng như khả năng cho ra nước tinh\r\n    khiết đun sôi ở những mức nhiệt độ chính xác, chiếc máy này không chỉ hướng tới sử dụng tại các văn phòng thuần túy\r\n    mà còn cả những gia đình trẻ có em bé (để pha sữa) và những người lớn tuổi hoặc có nhu cầu khắt khe trong việc\r\n    thưởng thức các loại trà, cà phê,... một cách đúng điệu. </p>\r\n<p class=\'blog-content\'> Philips - thương hiệu nổi tiếng đến từ Hà Lan đã quá quen thuộc với chúng ta qua nhiều ngành\r\n    khác nhau, đa dạng các thiết bị gia dụng, từ nồi chiên, bàn ủi, máy xay, đèn v.v… Philips ADD6910 là sản phẩm mới\r\n    nhất của Philips Water, bên cạnh những sản phẩm lọc nước khác ra mắt trước giờ như lọc nước RO để gầm, máy lọc RO\r\n    dạng đứng, bộ lọc nước vòi sen,... - một số thí dụ trong chuỗi các giải pháp lọc nước thông minh và toàn diện nhu\r\n    cầu. </p>\r\n<p class=\'blog-content\'> Về thiết kế </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_1.jpg\" alt=\'\'> </div> Máy lọc nước để\r\nbàn RO Philips ADD6910 có thiết kế hình tháp, tổng thể màu trắng tương tự một chiếc máy pha cà phê để trong các văn\r\nphòng hiện đại. Kích thước tổng thể vào khoảng 232*250*424mm nên theo mình cũng sẽ không chiếm quá nhiều diện tích, từ\r\nđó tăng tính linh hoạt hơn khi sắp xếp bố trí. <div class=\'blog-img\'> <img\r\n        src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_2.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Bề mặt trước của máy là một bảng điều khiển cảm ứng với đèn nền nhẹ nhàng bên dưới. Mình đánh\r\n    giá cao chỗ này, tuy là một điểm nhỏ nhưng sẽ hữu ích trong các tình huống như đặt máy trong phòng để pha sữa cho em\r\n    bé vào ban đêm sẽ dễ nhận diện chính xác vị trí các nút bấm hơn. </p>\r\n<p class=\'blog-content\'> Chi tiết hơn về các nút bấm và thông qua đó cũng sẽ thể hiện rõ tính năng hoạt động của máy,\r\n    chúng ta sẽ có các mức nhiệt độ: </p>\r\n<p class=\'blog-content\'> Ambient: nước nhiệt độ phòng </p>\r\n<p class=\'blog-content\'> 45 độ: Thích hợp pha sữa cho bé, không cần pha nước hoặc để nguội nước theo cách truyền thống,\r\n    từ đó rất tiết kiệm thời gian pha sữa khi bé bị đói mà vẫn đảm bảo pha đúng, không bị vón cục sữa do quá nóng hoặc\r\n    quá lạnh khiến sữa không chín. </p>\r\n<p class=\'blog-content\'> 85 độ: Thích hợp pha trà/cafe bởi theo các nghiên cứu đã chỉ ra, nếu pha nước sôi quá nhiệt sẽ\r\n    khiến hỏng vị nguyên thủy vốn có của trà, khiến các lá trà nát hơn và cũng gắt vị hơn. Mặt khác, nước được lọc từ RO\r\n    sẽ tinh khiết, không có các tạp vị khác của nước thường, vị trà hoặc cafe giữ được độ nguyên chất. </p>\r\n<p class=\'blog-content\'> 95 độ: Thích hợp để nấu mì gói (mình thích phần này dã man bởi việc nấu nước và ngồi đợi là một\r\n    trong những rào cản lớn khiến mình thà để bụng đói đêm khuya thay vì phải đi nấu mì 😔) </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_3.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Một trong những điểm mình thích ở cách bố trí nút chính là việc các nấc nhiệt độ được nâng lên\r\n    cao dần, cao nhất ở trên cùng nên cũng sẽ hạn chế được tối đa việc trẻ nhỏ vô tình chạm vào. Mặt khác, để lấy được\r\n    nước nóng từ 45 độ thì trước khi chạm vào núm lấy nước phải bấm vào biểu tượng khóa trẻ em trước (nút hình ổ khóa),\r\n    từ đó đảm bảo an toàn hơn, chống chạm nhầm gây nguy hiểm. </p>\r\n<p class=\'blog-content\'> Lõi lọc và nguồn nước </p>\r\n<p class=\'blog-content\'> Vị trí mặt bên trên sẽ là một nắp đậy chứa lõi lọc bên trong. Khi muốn lấy lõi lọc ra chúng ta\r\n    chỉ cần bấm nút vào, sau đó xoay ngược chiều kim đồng hồ và rút lên, cực kỳ đơn giản. Với thiết kế đơn giản như thế\r\n    này, việc thay lõi sẽ cực kỳ đơn giản và không chỉ nam mà cả chị em phụ nữ cũng có thể dễ dàng làm được. </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_4.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Bình nước phía sau có dung tích là 4 lít. Chúng ta có thể refill nước vào ngay tại chỗ hoặc\r\n    xách phần bình này đi ra ngoài để lấy nước và cho trở lại máy là xong. Đây không chỉ là bình chứa nước thông thường\r\n    mà ngoài ra, đó còn là nơi chứa nước đi ra sau khi trải qua chu trình lọc RO. Đây chính là một trong những điểm mấu\r\n    chốt để đảm bảo không cần đấu nối dây phức tạp. Bên trong máy sẽ có cảm biến và một khi lượng chất rắn vượt quá\r\n    ngưỡng cho phép thì hệ thống sẽ báo để người dùng biết và xả bỏ toàn bộ nước ra ngoài (trong tình huống refill nước\r\n    trực tiếp vào). </p>\r\n<p class=\'blog-content\'> Công nghệ lọc và chi phí </p>\r\n    <div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_5.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Philips Water cho biết chiếc máy này sử dụng công nghệ Lõi lọc 5 trong 1 sản xuất tại Nhật, đáp\r\n    ứng nước uống tinh khiết với 1 quy trình lọc duy nhất. Bước lọc RO cho nước ra là hoàn toàn tinh khiết, đồng thời sẽ\r\n    được cho đi qua đèn UV để khử trùng, diệt sạch vi khuẩn, virus, chống tái nhiễm khuẩn nên đảm bảo tuyệt đối an toàn.\r\n</p>\r\n<p class=\'blog-content\'> Hiệu suất lọc RO đạt tỷ lệ 3:1, tiết kiệm hơn so với nhiều chiếc máy khác trên thị trường. Bình\r\n    nước có cảm biến báo khi nào phải xả đổ nước khi quá bẩn. Nước được cho chảy qua lõi đun với tốc độ 3s, tiết kiệm\r\n    điện so với giải pháp đun bình, nhờ đó trong tình huống cần sử dụng ngay, thí dụ như pha sữa cho em bé đang đói thì\r\n    sẽ không cần phải tốn thời gian chờ đợi, đặc biệt là đối với anh em vừa có con nhỏ và thời gian bú sữa thì \'mệt\'\r\n    nhất là vào ban đêm. </p>\r\n<p class=\'blog-content\'> Nhà sản xuất cho biết lõi lọc có tuổi thọ là 1 năm thay một lần. Trong một phép tính, giả sử\r\n    mỗi năm trung bình hộ gia đình sử dụng 2.000 lít nước, xấp xỉ 5 lít nước mỗi ngày. Suy ra trong 6 năm sẽ cần 12.000\r\n    lít nước tương đương với 5 lần thay lõi lọc với giá 2,1 triệu đồng mỗi lõi. Hoặc 649 bình nước 18.5 lít tiêu chuẩn.\r\n    Giá 1 bình nước 18.5 lít khoảng 50.000 VND. Qua đó tiết kiệm 67%, tương đương với gần 22 triệu tiết kiệm cho chi phí\r\n    nước uống cho gia đình trong 6 năm. </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_6.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Như vậy, với những đặc điểm về mặt thiết kế, hoàn thiện, cách thức vận hành, hiệu suất lọc,\r\n    chất lượng nước và cả yếu tố chi phí, chiếc máy lọc nước để bàn RO Philips ADD6910 của Philips Water sẽ là một trong\r\n    những lựa chọn đáng lưu ý cho những không gian văn phòng, working space đề cao tính thẩm mỹ, gọn gàng, tiện dụng,\r\n    đồng thời những gia đình có trẻ nhỏ hoặc những ai có yêu cầu cao về mặt thưởng thức đồ uống, điển hình như người lớn\r\n    tuổi,... </p>\r\n', '2021-04-09 18:20:37', NULL, 1, 2, NULL, '', 'bai-viet-4');
INSERT INTO `blog` VALUES (5, 'Bài viết 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus. Vestibulum a', '<p class=\'blog-content\'> Với các đặc điểm từ sự gọn gàng, thanh tao trong thiết kế cũng như khả năng cho ra nước tinh\r\n    khiết đun sôi ở những mức nhiệt độ chính xác, chiếc máy này không chỉ hướng tới sử dụng tại các văn phòng thuần túy\r\n    mà còn cả những gia đình trẻ có em bé (để pha sữa) và những người lớn tuổi hoặc có nhu cầu khắt khe trong việc\r\n    thưởng thức các loại trà, cà phê,... một cách đúng điệu. </p>\r\n<p class=\'blog-content\'> Philips - thương hiệu nổi tiếng đến từ Hà Lan đã quá quen thuộc với chúng ta qua nhiều ngành\r\n    khác nhau, đa dạng các thiết bị gia dụng, từ nồi chiên, bàn ủi, máy xay, đèn v.v… Philips ADD6910 là sản phẩm mới\r\n    nhất của Philips Water, bên cạnh những sản phẩm lọc nước khác ra mắt trước giờ như lọc nước RO để gầm, máy lọc RO\r\n    dạng đứng, bộ lọc nước vòi sen,... - một số thí dụ trong chuỗi các giải pháp lọc nước thông minh và toàn diện nhu\r\n    cầu. </p>\r\n<p class=\'blog-content\'> Về thiết kế </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_1.jpg\" alt=\'\'> </div> Máy lọc nước để\r\nbàn RO Philips ADD6910 có thiết kế hình tháp, tổng thể màu trắng tương tự một chiếc máy pha cà phê để trong các văn\r\nphòng hiện đại. Kích thước tổng thể vào khoảng 232*250*424mm nên theo mình cũng sẽ không chiếm quá nhiều diện tích, từ\r\nđó tăng tính linh hoạt hơn khi sắp xếp bố trí. <div class=\'blog-img\'> <img\r\n        src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_2.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Bề mặt trước của máy là một bảng điều khiển cảm ứng với đèn nền nhẹ nhàng bên dưới. Mình đánh\r\n    giá cao chỗ này, tuy là một điểm nhỏ nhưng sẽ hữu ích trong các tình huống như đặt máy trong phòng để pha sữa cho em\r\n    bé vào ban đêm sẽ dễ nhận diện chính xác vị trí các nút bấm hơn. </p>\r\n<p class=\'blog-content\'> Chi tiết hơn về các nút bấm và thông qua đó cũng sẽ thể hiện rõ tính năng hoạt động của máy,\r\n    chúng ta sẽ có các mức nhiệt độ: </p>\r\n<p class=\'blog-content\'> Ambient: nước nhiệt độ phòng </p>\r\n<p class=\'blog-content\'> 45 độ: Thích hợp pha sữa cho bé, không cần pha nước hoặc để nguội nước theo cách truyền thống,\r\n    từ đó rất tiết kiệm thời gian pha sữa khi bé bị đói mà vẫn đảm bảo pha đúng, không bị vón cục sữa do quá nóng hoặc\r\n    quá lạnh khiến sữa không chín. </p>\r\n<p class=\'blog-content\'> 85 độ: Thích hợp pha trà/cafe bởi theo các nghiên cứu đã chỉ ra, nếu pha nước sôi quá nhiệt sẽ\r\n    khiến hỏng vị nguyên thủy vốn có của trà, khiến các lá trà nát hơn và cũng gắt vị hơn. Mặt khác, nước được lọc từ RO\r\n    sẽ tinh khiết, không có các tạp vị khác của nước thường, vị trà hoặc cafe giữ được độ nguyên chất. </p>\r\n<p class=\'blog-content\'> 95 độ: Thích hợp để nấu mì gói (mình thích phần này dã man bởi việc nấu nước và ngồi đợi là một\r\n    trong những rào cản lớn khiến mình thà để bụng đói đêm khuya thay vì phải đi nấu mì 😔) </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_3.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Một trong những điểm mình thích ở cách bố trí nút chính là việc các nấc nhiệt độ được nâng lên\r\n    cao dần, cao nhất ở trên cùng nên cũng sẽ hạn chế được tối đa việc trẻ nhỏ vô tình chạm vào. Mặt khác, để lấy được\r\n    nước nóng từ 45 độ thì trước khi chạm vào núm lấy nước phải bấm vào biểu tượng khóa trẻ em trước (nút hình ổ khóa),\r\n    từ đó đảm bảo an toàn hơn, chống chạm nhầm gây nguy hiểm. </p>\r\n<p class=\'blog-content\'> Lõi lọc và nguồn nước </p>\r\n<p class=\'blog-content\'> Vị trí mặt bên trên sẽ là một nắp đậy chứa lõi lọc bên trong. Khi muốn lấy lõi lọc ra chúng ta\r\n    chỉ cần bấm nút vào, sau đó xoay ngược chiều kim đồng hồ và rút lên, cực kỳ đơn giản. Với thiết kế đơn giản như thế\r\n    này, việc thay lõi sẽ cực kỳ đơn giản và không chỉ nam mà cả chị em phụ nữ cũng có thể dễ dàng làm được. </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_4.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Bình nước phía sau có dung tích là 4 lít. Chúng ta có thể refill nước vào ngay tại chỗ hoặc\r\n    xách phần bình này đi ra ngoài để lấy nước và cho trở lại máy là xong. Đây không chỉ là bình chứa nước thông thường\r\n    mà ngoài ra, đó còn là nơi chứa nước đi ra sau khi trải qua chu trình lọc RO. Đây chính là một trong những điểm mấu\r\n    chốt để đảm bảo không cần đấu nối dây phức tạp. Bên trong máy sẽ có cảm biến và một khi lượng chất rắn vượt quá\r\n    ngưỡng cho phép thì hệ thống sẽ báo để người dùng biết và xả bỏ toàn bộ nước ra ngoài (trong tình huống refill nước\r\n    trực tiếp vào). </p>\r\n<p class=\'blog-content\'> Công nghệ lọc và chi phí </p>\r\n    <div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_5.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Philips Water cho biết chiếc máy này sử dụng công nghệ Lõi lọc 5 trong 1 sản xuất tại Nhật, đáp\r\n    ứng nước uống tinh khiết với 1 quy trình lọc duy nhất. Bước lọc RO cho nước ra là hoàn toàn tinh khiết, đồng thời sẽ\r\n    được cho đi qua đèn UV để khử trùng, diệt sạch vi khuẩn, virus, chống tái nhiễm khuẩn nên đảm bảo tuyệt đối an toàn.\r\n</p>\r\n<p class=\'blog-content\'> Hiệu suất lọc RO đạt tỷ lệ 3:1, tiết kiệm hơn so với nhiều chiếc máy khác trên thị trường. Bình\r\n    nước có cảm biến báo khi nào phải xả đổ nước khi quá bẩn. Nước được cho chảy qua lõi đun với tốc độ 3s, tiết kiệm\r\n    điện so với giải pháp đun bình, nhờ đó trong tình huống cần sử dụng ngay, thí dụ như pha sữa cho em bé đang đói thì\r\n    sẽ không cần phải tốn thời gian chờ đợi, đặc biệt là đối với anh em vừa có con nhỏ và thời gian bú sữa thì \'mệt\'\r\n    nhất là vào ban đêm. </p>\r\n<p class=\'blog-content\'> Nhà sản xuất cho biết lõi lọc có tuổi thọ là 1 năm thay một lần. Trong một phép tính, giả sử\r\n    mỗi năm trung bình hộ gia đình sử dụng 2.000 lít nước, xấp xỉ 5 lít nước mỗi ngày. Suy ra trong 6 năm sẽ cần 12.000\r\n    lít nước tương đương với 5 lần thay lõi lọc với giá 2,1 triệu đồng mỗi lõi. Hoặc 649 bình nước 18.5 lít tiêu chuẩn.\r\n    Giá 1 bình nước 18.5 lít khoảng 50.000 VND. Qua đó tiết kiệm 67%, tương đương với gần 22 triệu tiết kiệm cho chi phí\r\n    nước uống cho gia đình trong 6 năm. </p>\r\n<div class=\'blog-img\'> <img src=\"http://127.0.0.1:8000/assets/img/blog/tin_tuc1/tin-tuc_6.jpg\" alt=\'\'> </div>\r\n<p class=\'blog-content\'> Như vậy, với những đặc điểm về mặt thiết kế, hoàn thiện, cách thức vận hành, hiệu suất lọc,\r\n    chất lượng nước và cả yếu tố chi phí, chiếc máy lọc nước để bàn RO Philips ADD6910 của Philips Water sẽ là một trong\r\n    những lựa chọn đáng lưu ý cho những không gian văn phòng, working space đề cao tính thẩm mỹ, gọn gàng, tiện dụng,\r\n    đồng thời những gia đình có trẻ nhỏ hoặc những ai có yêu cầu cao về mặt thưởng thức đồ uống, điển hình như người lớn\r\n    tuổi,... </p>\r\n', '2021-04-09 18:20:37', NULL, 1, 2, NULL, '', 'bai-viet-5');

-- ----------------------------
-- Table structure for chitietdonhang
-- ----------------------------
DROP TABLE IF EXISTS `chitietdonhang`;
CREATE TABLE `chitietdonhang`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `madonhang` int NULL DEFAULT NULL,
  `masanpham` int NULL DEFAULT NULL,
  `soluong` int NULL DEFAULT NULL,
  `gia` float NULL DEFAULT NULL,
  `giamgia` float NULL DEFAULT NULL,
  `trangthai` int NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 151 CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of chitietdonhang
-- ----------------------------
INSERT INTO `chitietdonhang` VALUES (142, 78, 3, 1, 3000000, NULL, 1, '2021-05-05 02:43:05', '2021-05-05 02:43:05', NULL);
INSERT INTO `chitietdonhang` VALUES (141, 78, 6, 1, 6490000, NULL, 1, '2021-05-05 02:43:05', '2021-05-05 02:43:05', NULL);
INSERT INTO `chitietdonhang` VALUES (140, 78, 5, 2, 7490000, NULL, 1, '2021-05-05 02:43:05', '2021-05-05 02:43:05', NULL);
INSERT INTO `chitietdonhang` VALUES (139, 78, 4, 1, 7999000, NULL, 1, '2021-05-05 02:43:05', '2021-05-05 02:43:05', NULL);
INSERT INTO `chitietdonhang` VALUES (143, 79, 4, 1, 7999000, NULL, 1, '2021-05-10 16:19:40', '2021-05-10 16:19:40', NULL);
INSERT INTO `chitietdonhang` VALUES (144, 79, 5, 1, 7490000, NULL, 1, '2021-05-10 16:19:40', '2021-05-10 16:19:40', NULL);
INSERT INTO `chitietdonhang` VALUES (145, 80, 4, 1, 7999000, NULL, 1, '2021-05-10 16:26:58', '2021-05-10 16:26:58', NULL);
INSERT INTO `chitietdonhang` VALUES (146, 80, 5, 1, 7490000, NULL, 1, '2021-05-10 16:26:58', '2021-05-10 16:26:58', NULL);
INSERT INTO `chitietdonhang` VALUES (147, 81, 4, 1, 7999000, NULL, 1, '2021-05-10 16:33:08', '2021-05-10 16:33:08', NULL);
INSERT INTO `chitietdonhang` VALUES (148, 81, 6, 1, 6490000, NULL, 1, '2021-05-10 16:33:08', '2021-05-10 16:33:08', NULL);
INSERT INTO `chitietdonhang` VALUES (149, 85, 4, 1, 7999000, NULL, 1, '2021-05-11 04:23:17', '2021-05-11 04:23:17', NULL);
INSERT INTO `chitietdonhang` VALUES (150, 85, 5, 1, 7490000, NULL, 1, '2021-05-11 04:23:17', '2021-05-11 04:23:17', NULL);

-- ----------------------------
-- Table structure for chucnang
-- ----------------------------
DROP TABLE IF EXISTS `chucnang`;
CREATE TABLE `chucnang`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `lienket` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `macha` int NULL DEFAULT NULL,
  `hienthimenu` int NULL DEFAULT 1,
  `trangthai` int NOT NULL,
  `ngaytao` datetime NOT NULL,
  `ngaycapnhat` datetime NOT NULL,
  `allow` int NOT NULL DEFAULT 0,
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 66 CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of chucnang
-- ----------------------------
INSERT INTO `chucnang` VALUES (1, 'Trang chủ', 'index.php?controller=hethong&action=index', 0, 1, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 1, 'fa fa-home', NULL);
INSERT INTO `chucnang` VALUES (2, 'Quản lý sản xuất', '#', 0, 1, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0, 'fa fa-cubes', NULL);
INSERT INTO `chucnang` VALUES (3, 'Danh sách sản phẩm', 'index.php?controller=sanpham&action=index', 2, 1, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (4, 'Thêm sản phẩm', 'index.php?controller=sanpham&action=create', 2, 1, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (5, 'Sửa', 'index.php?controller=sanpham&action=edit', 2, 0, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (6, 'Xóa', 'index.php?controller=sanpham&action=delete', 2, 0, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (7, 'Quản lý bán hàng', '#', 0, 1, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0, 'fa fa-credit-card', NULL);
INSERT INTO `chucnang` VALUES (8, 'Khách hàng', 'index.php?controller=customer&action=index', 7, 1, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (13, 'Thêm User', 'index.php?controller=user&action=create', 12, 1, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (10, 'Sửa User', 'index.php?controller=user&action=edit', 12, 0, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (11, 'Xóa User', 'index.php?controller=user&action=delete', 12, 0, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (12, 'Quản lý user', '#', 0, 1, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0, 'fa fa-user', NULL);
INSERT INTO `chucnang` VALUES (55, 'Xóa vĩnh viễn user', 'index.php?controller=user&action=destroy', 12, 0, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (14, 'Thoát', 'index.php?controller=user&action=logout', 0, 0, 1, '2020-09-04 00:00:00', '2020-09-04 00:00:00', 1, NULL, NULL);
INSERT INTO `chucnang` VALUES (15, 'Đăng nhập', 'index.php?controller=user&action=login', 0, 0, 1, '2020-09-04 00:00:00', '2020-09-04 00:00:00', 1, NULL, NULL);
INSERT INTO `chucnang` VALUES (16, 'Đăng nhập submit', 'index.php?controller=user&action=loginpost', 0, 0, 1, '2020-09-04 00:00:00', '2020-09-04 00:00:00', 1, NULL, NULL);
INSERT INTO `chucnang` VALUES (19, 'Cấp quyền', 'index.php?controller=role&action=setrole', 12, 0, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (25, 'Thêm mới khách hàng', 'index.php?controller=customer&action=create', 7, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (9, 'Danh Sách User', 'index.php?controller=user&action=index', 12, 1, 1, '2021-04-16 22:37:23', '2021-04-16 22:37:25', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (23, 'Sửa Khách hàng', 'index.php?controller=customer&action=edit', 7, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (20, 'Danh sách đơn hàng', 'index.php?controller=donhang&action=index', 7, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (21, 'Xóa đơn hàng', 'index.php?controller=donhang&action=delete', 7, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (22, 'Sửa đơn hàng', 'index.php?controller=donhang&action=edit', 7, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (24, 'Xóa', 'index.php?controller=customer&action=delete', 7, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (26, 'Thông tin chung', 'index.php?controller=user&action=thongtin', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, NULL, NULL);
INSERT INTO `chucnang` VALUES (27, 'Đổi mật khẩu', 'index.php?controller=user&action=doimatkhau', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, NULL, NULL);
INSERT INTO `chucnang` VALUES (28, 'Quản lý nhóm', '#', 0, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'fa fa-users', NULL);
INSERT INTO `chucnang` VALUES (29, 'Danh sách nhóm', 'index.php?controller=nhom&action=index', 28, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (30, 'Thêm ', 'index.php?controller=nhom&action=create', 28, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (31, 'Sửa', 'index.php?controller=nhom&action=edit', 28, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (32, 'Xóa', 'index.php?controller=nhom&action=delete', 28, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (34, 'Danh sách nhà cung cấp', 'index.php?controller=nhacungcap&action=index', 2, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (35, 'Thêm nhà cung cấp', 'index.php?controller=nhacungcap&action=create', 2, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (36, 'Sửa', 'index.php?controller=nhacungcap&action=edit', 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (37, 'Xóa', 'index.php?controller=nhacungcap&action=delete', 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (39, 'Danh sách loại sản phẩm', 'index.php?controller=loai&action=index', 2, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (40, 'Thêm loại sản phẩm', 'index.php?controller=loai&action=create', 2, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (41, 'Sửa', 'index.php?controller=loai&action=edit', 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (42, 'Xóa', 'index.php?controller=loai&action=delete', 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (43, 'Liên hệ', 'index.php?controller=mail&action=mail', 0, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'fa fa-comment', NULL);
INSERT INTO `chucnang` VALUES (45, 'Xem chi tiết đơn hàng', 'index.php?controller=donhang&action=detail', 7, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, NULL, NULL);
INSERT INTO `chucnang` VALUES (46, 'Xóa vĩnh viễn đơn hàng', 'index.php?controller=donhang&action=destroy', 7, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (47, 'Khôi phục đơn hàng', 'index.php?controller=donhang&action=restore', 7, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (48, 'Xóa vĩnh viễn sản phẩm', 'index.php?controller=sanpham&action=destroy', 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (49, 'Khôi phục', 'index.php?controller=sanpham&action=restore', 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (50, 'Xóa vĩnh viễn', 'index.php?controller=loai&action=destroy', 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (51, 'Khôi phục', 'index.php?controller=loai&action=restore', 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (52, 'Xóa vĩnh viễn khách hàng', 'index.php?controller=customer&action=destroy', 7, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (53, 'Khôi phục khách hàng', 'index.php?controller=customer&action=restore', 7, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (54, 'Đặt lại mật khẩu', 'index.php?controller=customer&action=reset', 7, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (56, 'Khôi phục user', 'index.php?controller=user&action=restore', 12, 0, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (57, 'Đặt lại mật khẩu', 'index.php?controller=user&action=reset', 12, 0, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (58, 'Xóa vĩnh viễn nhà cung cấp', 'index.php?controller=nhacungcap&action=destroy', 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (59, 'Khôi phục nhà cung cấp', 'index.php?controller=nhacungcap&action=restore', 2, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (60, 'Xóa vĩnh viễn', 'index.php?controller=nhom&action=destroy', 28, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (61, 'Khôi phục', 'index.php?controller=nhom&action=restore', 28, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (62, 'Xóa mail', 'index.php?controller=mail&action=delete', 43, 0, 1, '2021-05-06 14:05:48', '0000-00-00 00:00:00', 1, NULL, NULL);
INSERT INTO `chucnang` VALUES (64, 'Trả lời mail', 'index.php?controller=mail&action=reply', 43, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, NULL, NULL);
INSERT INTO `chucnang` VALUES (65, 'Chi tiết mail', 'index.php?controller=mail&action=maildetail', 43, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, NULL, NULL);

-- ----------------------------
-- Table structure for danh_gia_san_pham
-- ----------------------------
DROP TABLE IF EXISTS `danh_gia_san_pham`;
CREATE TABLE `danh_gia_san_pham`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `san_pham_id` int NOT NULL,
  `danh_gia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `nguoi_dung_id` int NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `tra_loi` tinyint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of danh_gia_san_pham
-- ----------------------------
INSERT INTO `danh_gia_san_pham` VALUES (1, 3, 'Xịn xịn xịn!!!', 1, '2021-04-09 18:23:05', NULL, NULL, NULL);
INSERT INTO `danh_gia_san_pham` VALUES (2, 3, 'Máy yếu vcl!!!', 2, '2021-04-09 18:23:58', NULL, NULL, NULL);
INSERT INTO `danh_gia_san_pham` VALUES (3, 4, 'Tạm Tạm', 3, '2021-04-09 18:24:19', NULL, NULL, NULL);
INSERT INTO `danh_gia_san_pham` VALUES (4, 5, '1 Sao', 4, '2021-04-09 18:24:43', NULL, NULL, NULL);
INSERT INTO `danh_gia_san_pham` VALUES (5, 4, 'asdadasdaasdad', 1, '2021-05-10 07:09:22', '2021-05-10 07:09:22', NULL, NULL);
INSERT INTO `danh_gia_san_pham` VALUES (6, 4, 'aaaaaaaaaaaaaaaaaaaaaaaa', 1, '2021-05-10 07:09:30', '2021-05-10 07:09:30', NULL, NULL);
INSERT INTO `danh_gia_san_pham` VALUES (7, 4, 'asdadasdasd', 1, '2021-05-10 07:11:26', '2021-05-10 07:11:26', NULL, NULL);
INSERT INTO `danh_gia_san_pham` VALUES (8, 4, 'saaaaaaaaaaaaaaaaaaaaaaaa', 1, '2021-05-10 07:11:36', '2021-05-10 07:11:36', NULL, NULL);
INSERT INTO `danh_gia_san_pham` VALUES (9, 4, 'asdddddddddddddddddddddddddddd', 1, '2021-05-10 08:12:47', '2021-05-10 08:12:47', NULL, 3);
INSERT INTO `danh_gia_san_pham` VALUES (10, 4, 'asdasdsad', 1, '2021-05-10 08:17:39', '2021-05-10 08:17:39', NULL, 5);
INSERT INTO `danh_gia_san_pham` VALUES (11, 4, 'sadsdasd', 1, '2021-05-10 08:17:53', '2021-05-10 08:17:53', NULL, 6);
INSERT INTO `danh_gia_san_pham` VALUES (12, 4, 'asdasdasdasdaadsad', 1, '2021-05-10 08:19:00', '2021-05-10 08:19:00', NULL, 3);
INSERT INTO `danh_gia_san_pham` VALUES (13, 4, 'sadasdasdsad', 1, '2021-05-10 08:21:40', '2021-05-10 08:21:40', NULL, NULL);
INSERT INTO `danh_gia_san_pham` VALUES (14, 4, 'sadasdsadsadsad', 1, '2021-05-10 08:21:49', '2021-05-10 08:21:49', NULL, NULL);
INSERT INTO `danh_gia_san_pham` VALUES (15, 4, 'asdddddddddddddddddddddddddddddd', 1, '2021-05-10 08:22:17', '2021-05-10 08:22:17', NULL, 14);
INSERT INTO `danh_gia_san_pham` VALUES (16, 3, 'asssssssssssssssssss', 1, '2021-05-10 10:08:33', '2021-05-10 10:08:33', NULL, NULL);
INSERT INTO `danh_gia_san_pham` VALUES (17, 3, 'asdasdasasdasd', 1, '2021-05-10 10:09:53', '2021-05-10 10:09:53', NULL, NULL);
INSERT INTO `danh_gia_san_pham` VALUES (18, 3, 'aaaaaaaaaaaaaaaaaaaaaaaaaa', 1, '2021-05-10 10:11:10', '2021-05-10 10:11:10', NULL, NULL);
INSERT INTO `danh_gia_san_pham` VALUES (19, 3, 'aaaaaaaaaaaaaaaaaaa', 1, '2021-05-10 10:12:05', '2021-05-10 10:12:05', NULL, NULL);
INSERT INTO `danh_gia_san_pham` VALUES (20, 3, 'aaaaaaaaaaaaaaa', 1, '2021-05-10 10:13:13', '2021-05-10 10:13:13', NULL, NULL);
INSERT INTO `danh_gia_san_pham` VALUES (21, 3, 'aaaaasdsadsad', 1, '2021-05-10 10:13:34', '2021-05-10 10:13:34', NULL, NULL);
INSERT INTO `danh_gia_san_pham` VALUES (22, 3, 'aaaaaaaaaaaaa', 1, '2021-05-10 10:14:01', '2021-05-10 10:14:01', NULL, NULL);

-- ----------------------------
-- Table structure for donhang
-- ----------------------------
DROP TABLE IF EXISTS `donhang`;
CREATE TABLE `donhang`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `ngaydat` datetime NULL DEFAULT NULL,
  `sodonhang` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `makhachhang` int NULL DEFAULT NULL,
  `tongtien` float NULL DEFAULT NULL,
  `phiship` float NULL DEFAULT NULL,
  `trangthaidonhang` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `trangthai` int NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `dia_chi_giao_hang` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `luu_y` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 86 CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of donhang
-- ----------------------------
INSERT INTO `donhang` VALUES (78, '2021-05-05 09:43:05', 'HD0078', 20, 32469000, NULL, '2', 1, '2021-05-05 02:43:05', '2021-05-05 02:43:05', 'TTTH KHTN, 123 Nguyen Chi Thanh street, Q.10, hcm, vn', NULL, NULL);
INSERT INTO `donhang` VALUES (79, '2021-05-10 23:19:40', 'HD0079', 1, 15489000, NULL, '1', 1, '2021-05-10 16:19:40', '2021-05-10 16:19:40', ', 123 huynh thuc khang, , , ', NULL, NULL);
INSERT INTO `donhang` VALUES (80, '2021-05-10 23:26:58', 'HD0080', 1, 15489000, NULL, '1', 1, '2021-05-10 16:26:58', '2021-05-10 16:26:58', ', 123 huynh thuc khang, , , ', NULL, NULL);
INSERT INTO `donhang` VALUES (81, '2021-05-10 23:33:08', 'HD0081', 1, 14489000, NULL, '1', 1, '2021-05-10 16:33:08', '2021-05-10 16:33:08', ', 123 huynh thuc khang, , , ', NULL, NULL);
INSERT INTO `donhang` VALUES (82, '2021-05-10 23:35:20', 'HD0082', 1, 14489000, NULL, '1', 1, '2021-05-10 16:35:20', '2021-05-10 16:35:20', ', 123 huynh thuc khang, , , ', NULL, NULL);
INSERT INTO `donhang` VALUES (83, '2021-05-10 23:37:14', 'HD0083', 1, 14489000, NULL, '1', 1, '2021-05-10 16:37:14', '2021-05-10 16:37:14', ', 123 huynh thuc khang, , , ', NULL, NULL);
INSERT INTO `donhang` VALUES (84, '2021-05-10 23:37:32', 'HD0084', 1, 14489000, NULL, '1', 1, '2021-05-10 16:37:32', '2021-05-10 16:37:32', ', 123 huynh thuc khang, , , ', NULL, NULL);
INSERT INTO `donhang` VALUES (85, '2021-05-11 11:23:17', 'HD0085', 1, 15489000, NULL, '1', 1, '2021-05-11 04:23:17', '2021-05-11 04:23:17', ', 123 huynh thuc khang, , , ', NULL, NULL);

-- ----------------------------
-- Table structure for khachhang
-- ----------------------------
DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE `khachhang`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `sdt` varchar(20) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `trangthai` tinyint NULL DEFAULT NULL,
  `reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `dia_chi` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `avt` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of khachhang
-- ----------------------------
INSERT INTO `khachhang` VALUES (1, 'khachhang1', NULL, '2021-05-04 17:23:49', 'congthuan036288@gmail.com', '1234567890', '$2y$10$8LjLR0SVX5dUk4HIqx9DPeRelbH5Nbd6V1RjUQUnbCAPjuAul01py', NULL, 1, '', '123 huynh thuc khang', 'assets/img/avatars/admin.png', NULL);
INSERT INTO `khachhang` VALUES (2, 'khách hàng 2', '2021-05-10 06:28:56', '2021-05-13 08:35:04', 'khachhang2@gmail.com', '1234567890', '$2y$10$U2Yt2yfAO8o8xkahPX6pVeG9q4pC71.0O46OaaabJQofKfXCmiDti', NULL, 1, NULL, '65 Huỳnh Thúc Kháng', 'assets/img/avatars/user.png', NULL);
INSERT INTO `khachhang` VALUES (3, 'khách hàng 3', '2021-05-10 06:29:29', NULL, 'khachhang3@gmail.com', '1234567890', '$2y$10$FOouFhUA51jaKCOwBJO1juAn0tSWNrntnvqA7J/OrE3/GvMm83TYa', NULL, 1, NULL, '66 Huỳnh Thúc Kháng', 'assets/img/avatars/user.png', NULL);

-- ----------------------------
-- Table structure for lien_he_kh
-- ----------------------------
DROP TABLE IF EXISTS `lien_he_kh`;
CREATE TABLE `lien_he_kh`  (
  `id` int NOT NULL,
  `chu_de` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `nguoi_tao` int NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  `trangthai` int NULL DEFAULT NULL,
  `noi_dung` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lien_he_kh
-- ----------------------------
INSERT INTO `lien_he_kh` VALUES (1, 'chủ đề 1', 1, '2021-05-12 21:34:28', NULL, NULL, 1, 'Nội dung 1');
INSERT INTO `lien_he_kh` VALUES (2, 'chủ đề 2', 2, '2021-05-13 11:09:35', NULL, NULL, 1, 'Nội dung 2');

-- ----------------------------
-- Table structure for loai_bai_viet
-- ----------------------------
DROP TABLE IF EXISTS `loai_bai_viet`;
CREATE TABLE `loai_bai_viet`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of loai_bai_viet
-- ----------------------------
INSERT INTO `loai_bai_viet` VALUES (1, 'Công nghệ', 'Danh sách tin tức về công nghệ', '2021-04-09 21:01:52', NULL, NULL);
INSERT INTO `loai_bai_viet` VALUES (2, 'Sức Khỏe', 'Danh sách tin tức về chắm sóc sức khỏe', '2021-04-09 01:02:27', NULL, NULL);
INSERT INTO `loai_bai_viet` VALUES (3, 'Xã Hội', 'Danh sách tin tức về xã hội', '2021-04-09 16:03:24', NULL, NULL);

-- ----------------------------
-- Table structure for loaisanpham
-- ----------------------------
DROP TABLE IF EXISTS `loaisanpham`;
CREATE TABLE `loaisanpham`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `mota` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `macha` int NULL DEFAULT NULL,
  `tieude` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `tukhoa` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `motatimkiem` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `hinhchiase` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `tenrutgon` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `trangthai` int NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of loaisanpham
-- ----------------------------
INSERT INTO `loaisanpham` VALUES (1, 'dien thoai thong minh', 'dien thoai thong minh ', 'assets/img/avatars/smarphone.png', 0, 'dien thoai thong minh', 'dien thoai thong minh', 'dien thoai thong minh', 'assets/img/avatars/smarphone.png', 'dien thoai thong minh', 1, NULL, '2021-05-04 17:11:03', 'dien-thoai-thong-minh', NULL);
INSERT INTO `loaisanpham` VALUES (2, 'dien thoai thuong', 'dien thoai thuong ', 'assets/img/avatars/smarphone.png', 0, 'dien thoai thuong', 'dien thoai thuong', 'dien thoai thuong', 'assets/img/avatars/smarphone.png', 'dien thoai thuong', 1, NULL, '2021-05-04 17:12:12', 'dien-thoai-thuong', NULL);
INSERT INTO `loaisanpham` VALUES (3, 'laptop', 'laptop', 'assets/img/avatars/laptop.png', 0, 'laptop', 'laptop', 'laptop', 'assets/img/avatars/laptop.png', 'laptop', 1, NULL, '2021-05-04 17:12:48', 'laptop', NULL);
INSERT INTO `loaisanpham` VALUES (4, 'tablet', 'tablet ', '', 0, 'tablet', 'tablet', 'tablet', '', 'tablet', 1, NULL, '2021-05-04 17:13:24', 'tablet', NULL);
INSERT INTO `loaisanpham` VALUES (5, 'phu kien', 'phu kien', 'assets/img/avatars/sac.png', 0, 'phu kien', 'phu kien', 'phu kien', 'assets/img/avatars/sac.png', 'phu kien', 1, NULL, '2021-05-04 17:14:35', 'phu-kien', NULL);
INSERT INTO `loaisanpham` VALUES (6, 'dien may', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL);
INSERT INTO `loaisanpham` VALUES (7, 'May lanh', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL);
INSERT INTO `loaisanpham` VALUES (8, 'Tivi', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL);
INSERT INTO `loaisanpham` VALUES (9, 'May giat', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL);
INSERT INTO `loaisanpham` VALUES (10, 'Tu lanh', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL);
INSERT INTO `loaisanpham` VALUES (12, 'asdasd', 'asdasdasdasd', 'assets/img/apple-touch-icon.png', 3, 'asdasd', 'asdad', 'adasd', 'assets/img/custom-divider-1.png', 'asdasda', 0, '2021-05-04 17:00:48', NULL, 'asdasd', '2021-05-05 14:23:55');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (23, '2021_05_20_112036_create_roles_table', 1);

-- ----------------------------
-- Table structure for nhacungcap
-- ----------------------------
DROP TABLE IF EXISTS `nhacungcap`;
CREATE TABLE `nhacungcap`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `trangthai` int NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nhacungcap
-- ----------------------------
INSERT INTO `nhacungcap` VALUES (1, 'Samsung', 1, '2021-05-01 19:03:28', '2021-05-01 19:04:11', NULL);
INSERT INTO `nhacungcap` VALUES (2, 'Nokia', 1, NULL, NULL, NULL);
INSERT INTO `nhacungcap` VALUES (3, 'Xiaomi', 1, NULL, NULL, NULL);
INSERT INTO `nhacungcap` VALUES (4, 'Honor', 1, NULL, NULL, NULL);
INSERT INTO `nhacungcap` VALUES (5, 'iPhone', 1, NULL, NULL, NULL);
INSERT INTO `nhacungcap` VALUES (6, 'Asus', 1, NULL, NULL, NULL);
INSERT INTO `nhacungcap` VALUES (7, 'Dell', 1, NULL, NULL, NULL);
INSERT INTO `nhacungcap` VALUES (8, 'HP', 1, NULL, NULL, NULL);
INSERT INTO `nhacungcap` VALUES (9, 'Microsoft', 1, NULL, NULL, NULL);
INSERT INTO `nhacungcap` VALUES (10, 'Zadez', 1, NULL, NULL, NULL);
INSERT INTO `nhacungcap` VALUES (11, 'ivalue', 1, NULL, NULL, NULL);
INSERT INTO `nhacungcap` VALUES (12, 'LG', 1, NULL, NULL, NULL);
INSERT INTO `nhacungcap` VALUES (13, 'PHILIPS ', 1, NULL, NULL, NULL);
INSERT INTO `nhacungcap` VALUES (14, 'ELECTROLUX', 1, NULL, NULL, NULL);
INSERT INTO `nhacungcap` VALUES (15, 'asdasdsad', 0, '2021-05-01 19:04:32', NULL, '2021-05-05 21:28:54');

-- ----------------------------
-- Table structure for nhomquantri
-- ----------------------------
DROP TABLE IF EXISTS `nhomquantri`;
CREATE TABLE `nhomquantri`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `mota` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `trangthai` int NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nhomquantri
-- ----------------------------
INSERT INTO `nhomquantri` VALUES (1, 'nhom 1', 'nhom 1', 1, '2021-01-15 00:00:00', '2021-05-02 16:10:43', NULL);
INSERT INTO `nhomquantri` VALUES (2, 'nhom 2', 'nhom 2', 1, '2021-01-15 00:00:00', NULL, NULL);
INSERT INTO `nhomquantri` VALUES (3, 'nhóm 3', 'Nhóm 3', 1, '2021-05-02 16:11:28', NULL, NULL);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for phanquyen
-- ----------------------------
DROP TABLE IF EXISTS `phanquyen`;
CREATE TABLE `phanquyen`  (
  `machucnang` int NOT NULL,
  `maquantri` int NOT NULL,
  PRIMARY KEY (`machucnang`, `maquantri`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of phanquyen
-- ----------------------------
INSERT INTO `phanquyen` VALUES (2, 1);
INSERT INTO `phanquyen` VALUES (3, 1);
INSERT INTO `phanquyen` VALUES (4, 1);
INSERT INTO `phanquyen` VALUES (5, 1);
INSERT INTO `phanquyen` VALUES (6, 1);
INSERT INTO `phanquyen` VALUES (7, 1);
INSERT INTO `phanquyen` VALUES (8, 1);
INSERT INTO `phanquyen` VALUES (9, 1);
INSERT INTO `phanquyen` VALUES (10, 1);
INSERT INTO `phanquyen` VALUES (11, 1);
INSERT INTO `phanquyen` VALUES (12, 1);
INSERT INTO `phanquyen` VALUES (13, 1);
INSERT INTO `phanquyen` VALUES (19, 1);
INSERT INTO `phanquyen` VALUES (20, 1);
INSERT INTO `phanquyen` VALUES (21, 1);
INSERT INTO `phanquyen` VALUES (22, 1);
INSERT INTO `phanquyen` VALUES (23, 1);
INSERT INTO `phanquyen` VALUES (24, 1);
INSERT INTO `phanquyen` VALUES (25, 1);
INSERT INTO `phanquyen` VALUES (28, 1);
INSERT INTO `phanquyen` VALUES (29, 1);
INSERT INTO `phanquyen` VALUES (30, 1);
INSERT INTO `phanquyen` VALUES (31, 1);
INSERT INTO `phanquyen` VALUES (32, 1);
INSERT INTO `phanquyen` VALUES (34, 1);
INSERT INTO `phanquyen` VALUES (35, 1);
INSERT INTO `phanquyen` VALUES (36, 1);
INSERT INTO `phanquyen` VALUES (37, 1);
INSERT INTO `phanquyen` VALUES (39, 1);
INSERT INTO `phanquyen` VALUES (40, 1);
INSERT INTO `phanquyen` VALUES (41, 1);
INSERT INTO `phanquyen` VALUES (42, 1);
INSERT INTO `phanquyen` VALUES (43, 1);
INSERT INTO `phanquyen` VALUES (46, 1);
INSERT INTO `phanquyen` VALUES (47, 1);
INSERT INTO `phanquyen` VALUES (48, 1);
INSERT INTO `phanquyen` VALUES (49, 1);
INSERT INTO `phanquyen` VALUES (50, 1);
INSERT INTO `phanquyen` VALUES (51, 1);
INSERT INTO `phanquyen` VALUES (52, 1);
INSERT INTO `phanquyen` VALUES (53, 1);
INSERT INTO `phanquyen` VALUES (54, 1);
INSERT INTO `phanquyen` VALUES (55, 1);
INSERT INTO `phanquyen` VALUES (56, 1);
INSERT INTO `phanquyen` VALUES (57, 1);
INSERT INTO `phanquyen` VALUES (58, 1);
INSERT INTO `phanquyen` VALUES (59, 1);
INSERT INTO `phanquyen` VALUES (60, 1);
INSERT INTO `phanquyen` VALUES (61, 1);
INSERT INTO `phanquyen` VALUES (62, 1);
INSERT INTO `phanquyen` VALUES (63, 1);
INSERT INTO `phanquyen` VALUES (64, 1);

-- ----------------------------
-- Table structure for quantri
-- ----------------------------
DROP TABLE IF EXISTS `quantri`;
CREATE TABLE `quantri`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `tendangnhap` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `matkhau` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `manhom` int NULL DEFAULT NULL,
  `trangthai` int NULL DEFAULT NULL,
  `ngaytao` datetime NULL DEFAULT NULL,
  `ngaycapnhat` datetime NULL DEFAULT NULL,
  `avt` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of quantri
-- ----------------------------
INSERT INTO `quantri` VALUES (1, 'admin1', 'admin', '$2y$10$FMN6QBt9XBN2XwfIG7vgKeiB0/fw8KHghhwzpQ8A/sUkCcnV.B806', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'public/ckeditor/images/avt/client1.png', NULL, 'congthuan012@gmail.com');
INSERT INTO `quantri` VALUES (2, 'admin2', 'admin2', '123456', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'public/assets/img/user.png', NULL, 'dangngocquan36@gmail.com');
INSERT INTO `quantri` VALUES (3, 'admin3', 'admin3', '123456', 1, 1, NULL, '0000-00-00 00:00:00', '', NULL, NULL);
INSERT INTO `quantri` VALUES (9, 'user1', 'user1', 'user1', 2, 1, '2021-04-21 08:30:23', NULL, 'public/ckeditor/images/products/nokia-81-blue-1-600x600.jpg', NULL, NULL);
INSERT INTO `quantri` VALUES (8, 'user', 'user', 'user', 2, 1, '2021-04-21 08:24:50', NULL, 'public/ckeditor/images/products/nokia-81-blue-1-600x600.jpg', NULL, NULL);
INSERT INTO `quantri` VALUES (10, 'user1', 'user23', '$2y$10$sBI2/FloE2Fx.vBNfbUBZ.jdco1sY/gedjRdSFWVjUxH4xLe3rDh.', 1, 0, '2021-05-02 15:24:52', NULL, 'public/assets/img/user.png', '2021-05-05 17:55:04', NULL);

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users`  (
  `user_id` int NOT NULL,
  `role_id` int NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `update_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`, `role_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role_users
-- ----------------------------

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'Thêm khách hàng', 'create-guest', '{\"guest.create\":true,\"guest.update\":true,\"guest.delete\":true}', '2021-05-20 11:37:11', '2021-05-20 11:37:11');

-- ----------------------------
-- Table structure for sanpham
-- ----------------------------
DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE `sanpham`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `gia` bigint NULL DEFAULT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL,
  `hinhdaidien` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `video` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `manhacungcap` int NULL DEFAULT NULL,
  `maloai` int NULL DEFAULT NULL,
  `hinhchitiet` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `motachitiet` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL,
  `mavach` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `tieude` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `tukhoa` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `motatimkiem` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `hinhchiase` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `tenrutgon` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `trangthai` int NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `soluong` int NOT NULL DEFAULT 0,
  `deleted_at` datetime NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  `sku` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 45 CHARACTER SET = utf8 COLLATE = utf8_vietnamese_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sanpham
-- ----------------------------
INSERT INTO `sanpham` VALUES (3, 'Samsung Galaxy A70', 3000000, 'Chiếc điện thoại dành cho những điều lớn: màn hình lớn, viên pin dung lượng cao; 3 camera độ phân giải “siêu khủng”, Samsung A70 mở ra kỷ nguyên mới cho riêng bạn.', 'assets/img/products/samsung_a70_1.png', NULL, 1, 1, NULL, 'Màn hình : 6.7 inchs, 1080 x 2340 Pixels Camera trước : 32.0Mp Camera sau : Chính 32 MP & Phụ 8 MP, 5 MP RAM : 6 GB Bộ nhớ trong : 128 GB CPU : Snapdragon 675 8 nhân 64-bit, 8, 2 nhân 2.0 Ghz & 6 nhân 1.7 Ghz GPU : Adreno 612 Dung lượng pin : 4,500mAh Hệ điều hành : Android 9.0 (Pie) Thẻ SIM : Nano SIM, 2 Sim', NULL, 'samsung', NULL, NULL, NULL, 'samsung', 1, '2021-05-11 10:07:20', NULL, 0, NULL, 'samsung-galaxy-a70', NULL);
INSERT INTO `sanpham` VALUES (4, 'Xiaomi Pocophone F1', 7999000, '\"Ông vua tốc độ\" Pocophone F1 đã xuất hiện, bạn sẽ được tận hưởng tốc độ nhanh nhất, hiệu năng xử lý tuyệt vời nhất trong một mức giá khó tin.', 'assets/img/products/pocophone-f1.jpg', NULL, 3, 1, NULL, 'Màn hình : 6.18 inches, 1080 x 2280 Pixels Camera trước : 20.0 MP Camera sau : Camera kép 12MP+5MP RAM : 6 GB Bộ nhớ trong : 64 GB CPU : Snapdragon 845, 8, 2.8 GHz GPU : Adreno 630 Dung lượng pin : 4000 mAh Hệ điều hành : Android 8 Thẻ SIM : Nano SIM, 2 Sim', NULL, 'Xiaomi Pocophone F1', NULL, NULL, NULL, 'Xiaomi Pocophone F1', 1, '2021-05-11 10:07:20', NULL, 345, NULL, 'xiaomi-pocophone-f1', '1234567890142');
INSERT INTO `sanpham` VALUES (5, 'Xiaomi Mi 8 Lite 128GB', 7490000, 'Xiaomi Mi 8 Lite 128GB có không gian lưu trữ cực lớn, thiết kế sang trọng và cấu hình vượt trội, luôn sẵn sàng cho mọi hoạt động của bạn.', 'assets/img/products/Xiaomi-Mi-8-lite.png', NULL, 3, 1, NULL, 'Màn hình : 6.22 inches, 1080 x 2040 Pixel Camera trước : 24.0 MP Camera sau : 12.0 MP + 5.0 MP RAM : 6 GB Bộ nhớ trong : 128 GB CPU : SnapDragon 660, Octa-Core, 4x2.2 GHz Kryo 260 & 4x1.8 GHz Kryo 260 GPU : Adreno 512 Dung lượng pin : 3300mah Hệ điều hành : Android 8.1 Oreo (phiên bản Go) Thẻ SIM : Nano SIM, 2 Sim', NULL, 'asdasd', NULL, NULL, NULL, 'asdasd', 1, '2021-05-11 10:07:20', NULL, 345, NULL, 'xiaomi-mi-8-lite-128gb', NULL);
INSERT INTO `sanpham` VALUES (6, 'Samsung Galaxy A7 2018 - 128GB', 6490000, 'Với 3 camera sau, Samsung Galaxy A7 2018 128GB cho bạn thỏa sức sáng tạo trong nhiếp ảnh. Hơn nữa, Galaxy A7 còn phù hợp với giới trẻ bởi thiết kế phong cách và hiệu năng mạnh mẽ.', 'assets/img/products/samsung-galaxy-a7jpg.jpg', NULL, 1, 1, NULL, 'Màn hình : 6.0 inchs, 1080 x 2220 Pixels Camera trước : 24.0 MP Camera sau : 24 MP+8 MP+5 MP (3 camera) RAM : 6 GB Bộ nhớ trong : 128 GB CPU : Exynos 7885 8 nhân 64-bit, 8, 2 nhân 2.2 GHz Cortex-A73 & 6 nhân 1.6 GHz Cortex-A53 GPU : Mali™ G71 Dung lượng pin : 3300 mAh Hệ điều hành : Android 8 (Oreo) Thẻ SIM : Nano SIM, 2 Sim', NULL, 'asdasdsd', NULL, NULL, NULL, 'asdasd', 1, '2021-05-11 10:07:20', NULL, 345, NULL, 'samsung-galaxy-a7-2018-128gb', NULL);
INSERT INTO `sanpham` VALUES (7, 'Xiaomi Mi 8 Lite 64GB', 6690000, 'Một siêu phẩm với thiết kế nổi bật, camera xuất sắc và cấu hình vô cùng mạnh mẽ, Xiaomi Mi 8 Lite là chiếc điện thoại mang trên mình tất cả những gì bạn cần.', 'assets/img/products/Xiaomi-Mi-8-lite.png', NULL, 3, 1, NULL, 'Màn hình : 6.22 inches, 1080 x 2040 Pixel Camera trước : 24.0 MP Camera sau : 12.0 MP + 5.0 MP RAM : 4 GB Bộ nhớ trong : 64 GB CPU : SnapDragon 660, Octa-Core, 4x2.2 GHz Kryo 260 & 4x1.8 GHz Kryo 260 GPU : Adreno 512 Dung lượng pin : 3300mah Hệ điều hành : Android 8.1 Oreo (phiên bản Go) Thẻ SIM : Nano SIM, 2 Sim', NULL, 'Xiaomi Mi 8 Lite 64GB', NULL, NULL, NULL, 'Xiaomi Mi 8 Lite 64GB', 1, '2021-05-11 10:07:20', NULL, 345, NULL, 'xiaomi-mi-8-lite-64gb', NULL);
INSERT INTO `sanpham` VALUES (8, 'Honor 10', 9990000, 'Honor 10, chiếc smartphone sở hữu thiết kế bóng bẩy cuốn hút đi kèm cấu hình mạnh mẽ xuất sắc và khả năng chụp ảnh ưu việt.', 'assets/img/products/huawei-honor-10.jpg', NULL, 4, 1, NULL, 'Màn hình : 5.84\", 1080 x 2280 pixels Camera trước : 24 MP Camera sau : 24 MP và 16 MP RAM : 4 GB Bộ nhớ trong : 128 GB CPU : Hisilicon Kirin 970 , 8 nhân, 4 nhân 2.4 GHz Cortex-A73 & 4 nhân 1.8 GHz Cortex-A53 GPU : Mali-G72 MP12 Dung lượng pin : 3400 mAh Hệ điều hành : Android 8.1 (Oreo) Thẻ SIM : Nano SIM, 2 Sim, hỗ trợ 4G', NULL, 'asdasdasd', NULL, NULL, NULL, 'asdasdasd', 1, '2021-05-11 10:07:20', NULL, 345, NULL, 'honor-10', NULL);
INSERT INTO `sanpham` VALUES (9, 'Honor 8X 128GB123', 6990000, 'Honor 8X 128GB là chiếc điện thoại gần như hoàn hảo về mọi khía cạnh với thiết kế độc đáo, bộ nhớ trong cực lớn, màn hình viền mỏng và hiệu năng tuyệt vời.', 'assets/img/products/huawei-honor-8.jpg', NULL, 4, 1, NULL, 'Màn hình : 6.5 inchs, 1080 x 2340 Pixels Camera trước : 16.0 MP Camera sau : 20 MP và 2 MP (2 camera) RAM : 4 GB Bộ nhớ trong : 128 GB CPU : Hisilicon Kirin 710, 8, 4 x Cortex-A73 2.2 GHz + 4x Cortex-A53 1.7 GHz GPU : Mali-G51 MP4 Dung lượng pin : 3750 mAh Hệ điều hành : Android 8.1 Thẻ SIM : Nano SIM, 2 Sim', NULL, 'Honor 8X 128GB123', NULL, NULL, NULL, 'Honor 8X 128GB123', 1, '2021-05-11 10:07:20', NULL, 345, NULL, 'honor-8x-128gb123', NULL);
INSERT INTO `sanpham` VALUES (10, 'Honor Play', 6590000, 'Một sản phẩm đỉnh cao dành riêng cho game thủ với hiệu năng siêu mạnh và những tối ưu cho chơi game, đó chính là Honor Play.', 'assets/img/products/huawei-honor-play.jpg', NULL, 4, 1, NULL, 'Màn hình : 6.3\", 1080 x 2340 pixels Camera trước : 16 MP Camera sau : 16 MP + 2 MP RAM : 4 GB Bộ nhớ trong : 64 GB CPU : Hisilicon Kirin 970, 8 nhân, 4 x 2.36 GHz + 4 x 1.8 GHz GPU : Mali-G72 MP12 Dung lượng pin : 3750 mAh Hệ điều hành : Android 8.1 Oreo Thẻ SIM : Nano, 2 Sim, hỗ trợ 4G', NULL, 'Honor Play', NULL, NULL, NULL, 'Honor Play', 1, '2021-05-11 10:07:20', NULL, 345, NULL, 'honor-play', NULL);
INSERT INTO `sanpham` VALUES (11, 'iPhone 6s Plus 32GB', 9990000, 'Apple iPhone 6s Plus là chiếc iPhone màn hình lớn nhất, cho phép người dùng làm được nhiều việc hơn trên không gian rộng lớn.', 'assets/img/products/iphone-6-64gb.jpg', NULL, 5, 1, NULL, 'Màn hình : 1080 x 1920 pixels Camera trước : 5.0 MP Camera sau : 12.0 MP RAM : 2 GB Bộ nhớ trong : 32 GB CPU : Apple A9, 2 Nhân, 1.8 GHz GPU : PowerVR GT7600 Dung lượng pin : 2750mAh Thẻ SIM : Nano Sim, 1 Sim', NULL, 'iPhone 6s Plus 32GB', NULL, NULL, NULL, 'iPhone 6s Plus 32GB', 1, '2021-05-11 10:07:20', NULL, 345, NULL, 'iphone-6s-plus-32gb', NULL);
INSERT INTO `sanpham` VALUES (12, 'Xiaomi Mi 9 SE 64GB', 8490000, 'Được thiết kế hướng tới những người dùng yêu thích dòng smartphone nhỏ gọn, Xiaomi Mi 9 SE cho phép bạn cầm nắm và mang theo bên mình một cách dễ dàng', 'assets/img/products/Xiaomi-Mi-9.png', NULL, 3, 1, NULL, 'Màn hình : 5.97 inches, 1080 x 2340 Pixels Camera trước : 20.0 MP Camera sau : 48 MP,13 MP +8 MP ( 3 camera ) RAM : 6 GB Bộ nhớ trong : 64 GB CPU : Snap dragon 712, 8, 2.3Ghz GPU : Adreno 614 Dung lượng pin : 3070 mAh Hệ điều hành : Android 9 Thẻ SIM : Nano SIM, 2 Sim', NULL, 'Xiaomi Mi 9 SE 64GB', NULL, NULL, NULL, 'Xiaomi Mi 9 SE 64GB', 1, '2021-05-11 10:07:20', NULL, 345, NULL, 'xiaomi-mi-9-se-64gb', NULL);
INSERT INTO `sanpham` VALUES (13, 'Asus VIVOBOOK X507UA-EJ234T/Core i3-7020U', 10590000, 'Asus Vivobook X507UA-EJ234T là sự kết hợp hoàn hảo giữa vẻ đẹp và hiệu năng, khi máy có cấu hình tốt cùng với thiết kế màn hình viền mỏng thời trang.', 'assets/img/products/Laptop Asus X507UA-EJ313T.png', NULL, 6, 3, NULL, 'CPU : Intel, Core i3 RAM : 4 GB, DDR4 Ổ cứng : HDD 5400rpm, HDD: 1 TB SATA3, Hỗ trợ khe cắm SSD M.2 SATA3 Màn hình : 15.6 inchs, 1920 x 1080 Pixels Card màn hình : Intel® HD graphics, Tích hợp Cổng kết nối : LAN : Không, WIFI : 802.11 b/g/n Hệ điều hành : Windows 10 Home Trọng lượng : 1.68 Kg Kích thước : 365 x 266 x 21.9 mm', NULL, 'Asus VIVOBOOK X507UA-EJ234T/Core i3-7020U', NULL, NULL, NULL, 'Asus VIVOBOOK X507UA-EJ234T/Core i3-7020U', 1, '2021-05-11 10:07:20', NULL, 345, NULL, 'asus-vivobook-x507ua-ej234t-core-i3-7020u', NULL);
INSERT INTO `sanpham` VALUES (14, 'Dell Inspiron N3567S', 10990000, 'Dell Inspiron N3567S là chiếc máy tính dành cho học sinh, sinh viên và dân văn phòng. Nó có giá bán phải chăng, đi kèm với thiết kế hiện đại, chip Intel thế hệ 7 và màn hình lớn.', 'assets/img/products/Dell-Inspiron-N3567S.jpg', NULL, 7, 3, NULL, 'CPU : Intel, Core i3 RAM : 4 GB, DDR4 Ổ cứng : HDD, 1 TB Màn hình : 15.6 inchs, 1366 x 768 Pixels Card màn hình : Intel HD Graphics 620, Tích hợp Cổng kết nối : LAN : 10/100 Mbps Ethernet controller, WIFI : 802.11ac Hệ điều hành : Ubuntu Trọng lượng : 2.30 Kg Kích thước : 380 x 260 x 23.65 mm', NULL, 'Dell Inspiron N3567S', NULL, NULL, NULL, 'Dell Inspiron N3567S', 1, '2021-05-11 10:07:20', NULL, 345, NULL, 'dell-inspiron-n3567s', NULL);
INSERT INTO `sanpham` VALUES (15, 'HP 15-da0037TX/i3 7020U', 10990000, 'HP 15-da0037TX/i3 7020U là chiếc máy tính sở hữu một thiết kế đơn giản, màn hình lớn, chip xử lý Intel thế hệ thứ 7 và nhiều ưu điểm nữa bên cạnh một mức giá phải chăng.', 'assets/img/products/HP-15-DA0037TX.jpg', NULL, 8, 3, NULL, 'CPU : Intel, Core i3 RAM : 4 GB, DDR4 Ổ cứng : HDD, 500 GB Màn hình : 15.6 inchs, 1366 x 768 pixels Card màn hình : NVIDIA® GeForce® MX110, Card rời Cổng kết nối : LAN : Integrated 10/100/1000 GbE LAN, WIFI : 802.11b/g/n (1x1) Wi-Fi® and Bluetooth® 4.2 combo Hệ điều hành : Windows 10 Home Single Language 64 Trọng lượng : 1.77 Kg Kích thước : 376 x 246 x 22.5 mm', NULL, 'Dell Inspiron N3567S', NULL, NULL, NULL, 'Dell Inspiron N3567S', 1, '2021-05-11 10:07:20', NULL, 345, NULL, 'hp-15-da0037tx-i3-7020u', NULL);
INSERT INTO `sanpham` VALUES (16, 'Asus Vivobook X407UA-BV488T/i3-7020U/4G+16GB Optane/1TB/WIN10', 10690000, 'Với công nghệ bộ nhớ Intel Optane, Asus Vivobook X407UA có tốc độ nhanh như ổ cứng SSD và bộ nhớ nhiều của ổ cứng HDD.', '', NULL, 6, 3, NULL, 'CPU : Intel, Core i3 RAM : 4GB + 16GB Optane, DDR4 Ổ cứng : HDD 5400rpm, 1000 GB Màn hình : 14.0 inchs, 1366 x 768 Pixels Card màn hình : Intel HD Graphics, Tích hợp Cổng kết nối : LAN : Không, WIFI : 802.11 a/b/g/n/ac Hệ điều hành : Windows 10 Home Trọng lượng : 1.55 KG Kích thước : 328 x 246 x 21.9 ~22.9 mm (WxDxH)', NULL, 'Asus Vivobook X407UA-BV488T/i3-7020U/4G+16GB Optane/1TB/WIN10', NULL, NULL, NULL, 'Asus Vivobook X407UA-BV488T/i3-7020U/4G+16GB Optane/1TB/WIN10', 1, '2021-05-11 10:07:20', NULL, 345, NULL, 'asus-vivobook-x407ua-bv488t-i3-7020u-4g-16gb-optane-1tb-win10', NULL);
INSERT INTO `sanpham` VALUES (17, 'Dell Vostro 3568/Core i3-7020U/VTI32072W', 11890000, 'Dell Vostro 3568/Core i3-7020U là chiếc máy tính xách tay 15 inch lý tưởng dành cho người dùng văn phòng và học sinh, sinh viên. Laptop đến với màn hình lớn, bàn phím số và các tính năng bảo mật thiết yếu.', 'assets/img/products/dell-vostro-3568-i5-7200u.png', NULL, 7, 3, NULL, 'CPU : Intel, Core i3 RAM : 4 GB, DDR4 Ổ cứng : HDD, 1 TB Màn hình : 15.6 inches, 1366 x 768 pixels Card màn hình : Intel® UHD Graphics 620, Tích hợp Cổng kết nối : LAN : RJ-45- Ethernet port, WIFI : Intel 3165AC - 802.11ac and Bluetooth v4.2 combo Hệ điều hành : Windows 10 Home Single Language English Trọng lượng : 2.18 Kg Kích thước : 380 x 260 x 23.65 mm', NULL, 'Dell Vostro 3568/Core i3-7020U/VTI32072W', NULL, NULL, NULL, 'Dell Vostro 3568/Core i3-7020U/VTI32072W', 1, '2021-05-11 10:07:20', NULL, 345, NULL, 'dell-vostro-3568-core-i3-7020u-vti32072w', NULL);
INSERT INTO `sanpham` VALUES (18, 'HP Pavilion 14-ce1014TU/Core i3-8145U/4GB/500GB/WIN10', 12990000, 'Nếu bạn đang kiếm tìm một chiếc laptop có diện mạo hiện đại sang trọng, được tích hợp nhiều tính năng thú vị và cũng sở hữu hiệu năng ấn tượng thì HP Pavilion 14-ce1014TU chính là sản phẩm tối ưu dành cho bạn.', 'assets/img/products/hp-pavilion-14-ce1014.jpg', NULL, 8, 3, NULL, 'CPU : Intel, Core i3 RAM : 4 GB, DDR4 Ổ cứng : HDD 5400rpm, 500 GB Màn hình : 14.0 inchs, 1920 x 1080 Pixels Card màn hình : Intel® HD Graphics 600, Tích hợp Cổng kết nối : LAN : 10/100/1000 Mbps, WIFI : 802.11 b/g/n Hệ điều hành : Windows 10 Home SL 64 Trọng lượng : 1,53kg Kích thước : Dài 324 mm - Rộng 227.6 mm - Dày 19.9 mm', NULL, 'HP Pavilion 14-ce1014TU/Core i3-8145U/4GB/500GB/WIN10', NULL, NULL, NULL, 'HP Pavilion 14-ce1014TU/Core i3-8145U/4GB/500GB/WIN10', 1, '2021-05-11 10:07:20', NULL, 345, NULL, 'hp-pavilion-14-ce1014tu-core-i3-8145u-4gb-500gb-win10', NULL);
INSERT INTO `sanpham` VALUES (19, 'Chuột không dây quang Microsoft 1850', 350000, 'Chuột quang không dây Microsoft 1850 là giải pháp hữu hiệu nhằm thay thế chiếc bàn chuột touchpad của laptop', 'assets/img/products/chuot-khong-day-microsoft-1850.jpg', NULL, 9, 5, NULL, 'Nút ON/OFF Để kéo dài tuổi thọ pin, hãy sử dụng công tắc Bật/Tắt để tắt nguồn khi không sử dụng. Chế độ bảo hành 12 tháng 1 đổi 1 Màu sắc Đen Các mức DPI 1000 Đặc điểm nổi bật Nhỏ gọn tinh tế, thiết kế vừa tay cho cả nam và nữ Thời lượng pin Lên đến 12 tháng Độ bền nút bấm 1 triệu lần nhấn Dòng máy tương thích Máy tính với Windows XP/Vista/7/8/10; Linus; Mac OS Nhu cầu sử dụng Phổ thông, văn phòng Loại chuột Quang, không dây Thương hiệu', NULL, 'Chuột không dây quang Microsoft 1850', NULL, NULL, NULL, 'Chuột không dây quang Microsoft 1850', 1, '2021-05-11 10:07:20', NULL, 345, NULL, 'chuot-khong-day-quang-microsoft-1850', NULL);
INSERT INTO `sanpham` VALUES (20, 'Chuột không dây Zadez M390 Đỏ', 200000, '', 'assets/img/products/Zadez-M390.png', NULL, 10, 5, NULL, 'Tính năng Tiết kiệm pin Kích thước 92*58*32 mm Trọng lượng 55g Kết nối Bluetooth Kết nối không dây với băng tần 2.4G Nút ON/OFF Để kéo dài tuổi thọ pin, hãy sử dụng công tắc Bật/Tắt để tắt nguồn khi không sử dụng. Chế độ bảo hành 12 tháng 1 đổi 1 Dòng máy tương thích Sử dụng cho PC,Laptop Nhu cầu sử dụng Du lịch, văn phòng Loại chuột Quang, không dây Thương hiệu ZADEZ Mẫu mã có thiết kế Ergonomic này sẽ giúp giảm tối đa nguy cơ dẫn đến Hội chứng ống cổ tay - là căn bệnh thường gặp đối với nhân viên văn phòng hoặc những người thường xuyên sử dụng máy tính. Màu sắc Đỏ Các mức DPI Độ phân giải 1000/1200/1600 DPI Đặc điểm nổi bật - Khoảng cách kết nối tối đa 10m, góc nhận sóng 360 độ, tiết kiệm năng lượng thông minh - Thiết kế Ergonomic, hạn chế tác động đến cổ tay người dùng - Receiver siêu nhỏ Thời lượng pin', NULL, 'Chuột không dây Zadez M390 Đỏ', NULL, NULL, NULL, 'Chuột không dây Zadez M390 Đỏ', 1, '2021-05-11 10:07:20', NULL, 345, NULL, 'chuot-khong-day-zadez-m390-do', NULL);

-- ----------------------------
-- Table structure for theo_doi_don_hang
-- ----------------------------
DROP TABLE IF EXISTS `theo_doi_don_hang`;
CREATE TABLE `theo_doi_don_hang`  (
  `id` int NOT NULL,
  `trangthai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of theo_doi_don_hang
-- ----------------------------
INSERT INTO `theo_doi_don_hang` VALUES (0, 'Xóa', NULL);
INSERT INTO `theo_doi_don_hang` VALUES (1, 'Mới', NULL);
INSERT INTO `theo_doi_don_hang` VALUES (2, 'Đang chuẩn bị', NULL);
INSERT INTO `theo_doi_don_hang` VALUES (3, 'đang giao', NULL);
INSERT INTO `theo_doi_don_hang` VALUES (4, 'Đã giao', NULL);
INSERT INTO `theo_doi_don_hang` VALUES (5, 'Hủy', NULL);

-- ----------------------------
-- Table structure for tra_loi_lien_he
-- ----------------------------
DROP TABLE IF EXISTS `tra_loi_lien_he`;
CREATE TABLE `tra_loi_lien_he`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tieu_de` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `noi_dung` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `nguoi_tra_loi` int NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  `tra_loi` int NULL DEFAULT NULL,
  `trangthai` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tra_loi_lien_he
-- ----------------------------
INSERT INTO `tra_loi_lien_he` VALUES (4, 'asdasdsad', 'asddddddddddddddddddasdasda adasdadasdadasdasd asdasd asdas asd', 1, '2021-05-13 10:15:11', NULL, NULL, 2, 1);
INSERT INTO `tra_loi_lien_he` VALUES (5, 'asdasdas', 'asda adas asd as asd a as sa a', 1, '2021-05-13 10:17:00', NULL, NULL, 2, 1);

-- ----------------------------
-- Table structure for trang_thai_don_hang
-- ----------------------------
DROP TABLE IF EXISTS `trang_thai_don_hang`;
CREATE TABLE `trang_thai_don_hang`  (
  `id` int NOT NULL,
  `trangthai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of trang_thai_don_hang
-- ----------------------------
INSERT INTO `trang_thai_don_hang` VALUES (1, 'chưa thanh toán');
INSERT INTO `trang_thai_don_hang` VALUES (2, 'Đã thanh toán');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sdt` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kichhoat` int NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Huỳnh Công Thuần', 'thuan@gmail.com', NULL, '$2y$10$fbW.d6U2gcmCC7j4lSmJ/eeUeJJsPKfHerunG6nZifPt/1bOLgsPa', NULL, '2021-05-21 10:07:09', '2021-05-21 10:07:09', '0362884401', NULL, 1, NULL);

SET FOREIGN_KEY_CHECKS = 1;
