-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Out-2021 às 02:58
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecom_store`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(1, 'Mrghie', 'zekkacardoso18@gmail.com', 'pass', 'erika.jpg', 'São Paulo', 'This application is created by Mdev media', '986005144', 'Web Developer'),
(5, 'Teste update', 'teste', 'teste', 'erika.jpg', '5', '<p>teste</p>', 'teste', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `boxes_section`
--

CREATE TABLE `boxes_section` (
  `box_id` int(11) NOT NULL,
  `box_title` text NOT NULL,
  `box_url` varchar(255) NOT NULL,
  `box_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `boxes_section`
--

INSERT INTO `boxes_section` (`box_id`, `box_title`, `box_url`, `box_desc`) VALUES
(1, 'Best Products', 'http://localhost/M-Dev-Store/index.php', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate doloribus minus aspernatur ab commodi facilis alias ullam dolorem, eos accusantium repellat in quasi obcaecati quam vero unde magnam, magni consequatur.'),
(2, '100% Satisfy', 'http://localhost/M-Dev-Store/index.php', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate doloribus minus aspernatur ab commodi facilis alias ullam dolorem, eos accusantium repellat in quasi obcaecati quam vero unde magnam, magni consequatur.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Men', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,'),
(2, 'Women', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,'),
(3, 'Kids', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,'),
(4, 'Other', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,');

-- --------------------------------------------------------

--
-- Estrutura da tabela `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(100) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(8, 'Matheus Cardoso', 'zekkacardoso18@gmail.com', 'familia01', 'São Paulo', 'São Paulo', '(11) 98600-5144', 'Rua texas 396', 'erika.jpg', '::1'),
(11, 'FABIO SIDNEY ANTONIO', 'matheuszekka@gmail.com', 'Fabiotcho2906*', 'Brasil', 'São Paulo', '11986005144', 'rua texas 396', 'erika.jpg', '::1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(1, 4, 121, 41477518, 1, 'Large', '2021-10-04', 'Complete'),
(2, 4, 64, 41477518, 1, 'Medium', '2021-10-04', 'Pending'),
(3, 8, 180, 288643355, 3, 'Medium', '2021-10-13', 'Complete'),
(4, 8, 34, 288643355, 1, 'Small', '2021-10-13', 'Pending'),
(5, 8, 90, 288643355, 1, 'Medium', '2021-10-13', 'Pending'),
(6, 8, 68, 463261585, 2, 'Medium', '2021-10-15', 'Pending'),
(7, 8, 360, 463261585, 4, 'Medium', '2021-10-15', 'Pending');

-- --------------------------------------------------------

--
-- Estrutura da tabela `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(2, 288643355, 180, 'Back Code', 3333, 2222, '13/10/2021');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(4, 8, 288643355, '10', 1, 'Small', 'Pending'),
(5, 8, 288643355, '12', 1, 'Medium', 'Pending'),
(6, 8, 463261585, '10', 2, 'Medium', 'Pending'),
(7, 8, 463261585, '12', 4, 'Medium', 'Pending');

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` varchar(26) NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keywords`) VALUES
(3, 1, 1, '2021-10-11 13:15:11', 'Edit winter Jacket', 'Man-Geox-Winter-jacket-1.jpg', 'Man-Geox-Winter-jacket-2.jpg', 'Man-Geox-Winter-jacket-3.jpg', 50, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ipsa velit cupiditate odit, voluptatum, sed necessitatibus modi voluptas culpa tenetur amet blanditiis maxime quam. Veniam vitae repellendus ullam sit id.</p>', 'winter'),
(4, 5, 1, '2021-09-10 11:53:46', 'Grey man ', 'grey-man-1.jpg', 'grey-man-2.jpg', 'grey-man-3.jpg', 75, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ipsa velit cupiditate odit, voluptatum, sed necessitatibus modi voluptas culpa tenetur amet blanditiis maxime quam. Veniam vitae repellendus ullam sit id.</p>', 'grey'),
(5, 3, 2, '2021-09-10 11:55:00', 'High heels pantofel brukat', 'High Heels Women Pantofel Brukat-1.jpg', 'High Heels Women Pantofel Brukat-2.jpg', 'High Heels Women Pantofel Brukat-3.jpg', 25, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ipsa velit cupiditate odit, voluptatum, sed necessitatibus modi voluptas culpa tenetur amet blanditiis maxime quam. Veniam vitae repellendus ullam sit id.</p>', 'brukat'),
(6, 2, 1, '2021-09-10 12:02:40', 'Mont blanc belt ', 'Mont-Blanc-Belt-man-1.jpg', 'Mont-Blanc-Belt-man-2.jpg', 'Mont-Blanc-Belt-man-3.jpg', 30, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ipsa velit cupiditate odit, voluptatum, sed necessitatibus modi voluptas culpa tenetur amet blanditiis maxime quam. Veniam vitae repellendus ullam sit id.</p>', 'mont blanc'),
(7, 5, 1, '2021-09-12 21:02:11', 'Polo', 'Man-Polo-1.jpg', 'Man-Polo-2.jpg', 'Man-Polo-3.jpg', 60, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quae amet ducimus doloremque consequuntur quaerat reprehenderit sint culpa inventore, quisquam vitae nesciunt quidem impedit, laboriosam nostrum veniam ut tempore autem.</p>', 'Polo'),
(8, 1, 2, '2021-09-12 21:04:44', 'Winter Jacket', 'Red-Winter-jacket-1.jpg', 'Red-Winter-jacket-2.jpg', 'Red-Winter-jacket-3.jpg', 79, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quae amet ducimus doloremque consequuntur quaerat reprehenderit sint culpa inventore, quisquam vitae nesciunt quidem impedit, laboriosam nostrum veniam ut tempore autem.</p>', 'Winter'),
(9, 4, 2, '2021-09-12 22:11:24', 'Waxed cotton coat', 'waxed-cotton-coat-woman-1.jpg', 'waxed-cotton-coat-woman-2.jpg', 'waxed-cotton-coat-woman-3.jpg', 64, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quae amet ducimus doloremque consequuntur quaerat reprehenderit sint culpa inventore, quisquam vitae nesciunt quidem impedit, laboriosam nostrum veniam ut tempore autem.</p>', 'Waxed'),
(10, 5, 2, '2021-09-12 21:13:20', 'Polo T-shirt', 'g-polos-tshirt-1.jpg', 'g-polos-tshirt-2.jpg', 'Man-Polo-3.jpg', 34, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quae amet ducimus doloremque consequuntur quaerat reprehenderit sint culpa inventore, quisquam vitae nesciunt quidem impedit, laboriosam nostrum veniam ut tempore autem.</p>', 'Polo'),
(11, 2, 2, '2021-09-12 22:10:55', 'Diamond heart ring', 'women-diamond-heart-ring-1.jpg', 'women-diamond-heart-ring-2.jpg', 'women-diamond-heart-ring-3.jpg', 600, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quae amet ducimus doloremque consequuntur quaerat reprehenderit sint culpa inventore, quisquam vitae nesciunt quidem impedit, laboriosam nostrum veniam ut tempore autem.</p>', 'Diamond'),
(12, 3, 1, '2021-10-11 13:11:40', 'Adidas Suarez', 'Man-Adidas-Suarez-Slop-On-1.jpg', 'Man-Adidas-Suarez-Slop-On-2.jpg', 'Man-Adidas-Suarez-Slop-On-3.jpg', 90, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quae amet ducimus doloremque consequuntur quaerat reprehenderit sint culpa inventore, quisquam vitae nesciunt quidem impedit, laboriosam nostrum veniam ut tempore autem.</p>', 'Suarez');

-- --------------------------------------------------------

--
-- Estrutura da tabela `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Jackets', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,'),
(2, 'Acessories', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,'),
(3, 'Shoes ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,'),
(4, 'Coats', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,'),
(5, 'T-Shirt', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,');

-- --------------------------------------------------------

--
-- Estrutura da tabela `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text DEFAULT NULL,
  `slide_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`, `slide_url`) VALUES
(7, 'Slider Number 7', 'slide-7.jpg', 'http://localhost/M-Dev-Store/index.php'),
(8, 'Slider Number 8', 'slide-8.jpg', 'http://localhost/M-Dev-Store/shop.php'),
(10, 'Slider Number 9', 'slide-6.jpg', 'http://localhost/M-Dev-Store/index.php');

-- --------------------------------------------------------

--
-- Estrutura da tabela `terms`
--

CREATE TABLE `terms` (
  `term_id` int(10) NOT NULL,
  `term_title` varchar(100) NOT NULL,
  `term_link` varchar(100) NOT NULL,
  `term_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `terms`
--

INSERT INTO `terms` (`term_id`, `term_title`, `term_link`, `term_desc`) VALUES
(1, 'Terms & Conditions Update', 'termLink', 'Lorem ipsum dolor, sit amet consectetur. adipisicing elit. Tenetur ducimus quaerat nulla cumque consequuntur culpa at ullam incidunt eligendi fugit, officia, quod consequatur laudantium eius assumenda labore? Rem, autem consectetur! Term & ConditionsLorem ipsum dolor, sit amet consectetur. adipisicing elit. Tenetur ducimus quaerat nulla cumque consequuntur culpa at ullam incidunt eligendi fugit, officia, quod consequatur laudantium eius assumenda labore? Rem, autem consectetur! Term & ConditionsLorem ipsum dolor, sit amet consectetur. adipisicing elit. Tenetur ducimus quaerat nulla cumque consequuntur culpa at ullam incidunt eligendi fugit, officia, quod consequatur laudantium eius assumenda labore? Rem, autem consectetur! Term & Conditions'),
(3, 'Promo & Other Term Conditions', 'promoTermConditions', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur ducimus quaerat nulla cumque consequuntur culpa at ullam incidunt eligendi fugit, officia, quod consequatur laudantium eius assumenda labore? Rem, autem consectetur!Promo & Other Term ConditionsLorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur ducimus quaerat nulla cumque consequuntur culpa at ullam incidunt eligendi fugit, officia, quod consequatur laudantium eius assumenda labore? Rem, autem consectetur!Promo & Other Term ConditionsLorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur ducimus quaerat nulla cumque consequuntur culpa at ullam incidunt eligendi fugit, officia, quod consequatur laudantium eius assumenda labore? Rem, autem consectetur!Promo & Other Term Conditions');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Índices para tabela `boxes_section`
--
ALTER TABLE `boxes_section`
  ADD PRIMARY KEY (`box_id`);

--
-- Índices para tabela `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Índices para tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Índices para tabela `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Índices para tabela `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Índices para tabela `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Índices para tabela `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Índices para tabela `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Índices para tabela `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Índices para tabela `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `boxes_section`
--
ALTER TABLE `boxes_section`
  MODIFY `box_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
