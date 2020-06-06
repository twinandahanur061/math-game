CREATE TABLE `player` (
  `id` int(11) NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `skor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `player` (`id`, `nama`, `email`, `skor`) VALUES
(1, 'E', 'e@gmail.com', 110),
(2, 'F', 'af@gmail.com', 20),
(3, 'G', 'g@gmail.com', 70),
(4, 'H', 'h@gmail.com', 40),
(5, 'I', 'i@gmail.com', 130),
(6, 'J', 'j@gmail.com', 30),
(7, 'K', 'k@gmail.com', 10),
(8, 'L', 'l@gmail.com', 40),
(9, 'M', 'm@gmail.com', 0),
(10, 'N', 'n@gmail.com', 30);

ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

