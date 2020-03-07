 <div class="menu">
    	<ul>
        	<li><a href="index.php">Trang chủ</a></li>
            <li><a href="index.php?xem=chitietloaisanpham&id=1">Sản phẩm</a></li>
            <li><a href="#">Hướng dẫn</a></li>
            <li><a href="#">Liên hệ</a></li>
            <li>
                <form action="" method="get">
                    Search: <input type="text" name="search" />
                    <button type="submit" name="submit">search</button>
                </form>
                <?php
                if (isset( $_GET['submit']) && $_GET["search"] != '') {
                    $search = $_GET['search'];
                    $query = "SELECT * FROM hanghoa WHERE (TenHH like '%$search%') OR (hang like '%$search%') ";

                    $sql = mysqli_query($connect, $query);
                    //echo $sql;
                    $num = mysqli_num_rows($sql);
                    if ($num > 0) {
                        echo $num." ket qua tra ve voi tu khoa <b>".$search."</b>";
                        echo '<table border="1" cellspacing="0" cellpadding="10">';
                        foreach( $sql as $row ) {
                            echo '<tr>';
                            echo "<td>{$row['TenHH']}</td>";
                            echo "<td>{$row['MSHH']}</td>";
                            echo '</tr>';
                        }
                        echo '</table>';
                    }
                    else {
                        echo "Khong tim thay ket qua!";
                    }
                }
                ?>
            </li>
        </ul>
    </div>