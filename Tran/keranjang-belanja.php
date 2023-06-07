<?php
if (isset($_GET['id_data']) && isset($_GET['jumlah'])) {

    $id_data = $_GET['id_data'];
    $jumlah = $_GET['jumlah'];

    include '../koneksi/koneksi.php';

    $sql = "select * from data_bahanBaju where id_data='$id_data'";

    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);
    $id_data = $data['id_data'];
    $jenis_bahan = $data['jenis_bahan'];
    $harga = $data['harga_satuan'];
} else {
    $id_data = "";
    $jumlah = 0;
}

if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];
} else {
    $aksi = "";
}


switch ($aksi) {
        //Fungsi untuk menambah penyewaan kedalam cart
    case "tambah_produk":
        $itemArray = array($id_data => array('id_data' => $id_data, 'jenis_bahan' => $jenis_bahan, 'jumlah' => $jumlah, 'harga' => $harga, 'stok' => $stok));
        if (!empty($_SESSION["keranjang_belanja"])) {
            if (in_array($data['id_data'], array_keys($_SESSION["keranjang_belanja"]))) {
                foreach ($_SESSION["keranjang_belanja"] as $k => $v) {
                    if ($data['id_data'] == $k) {
                        $_SESSION["keranjang_belanja"] = array_merge($_SESSION["keranjang_belanja"], $itemArray);
                    }
                }
            } else {
                $_SESSION["keranjang_belanja"] = array_merge($_SESSION["keranjang_belanja"], $itemArray);
            }
        } else {
            $_SESSION["keranjang_belanja"] = $itemArray;
        }
        break;
        //Fungsi untuk menghapus item dalam cart
    case "hapus":

        if (!empty($_SESSION["keranjang_belanja"])) {
            foreach ($_SESSION["keranjang_belanja"] as $k => $v) {
                if ($_GET["id_data"] == $k)
                    unset($_SESSION["keranjang_belanja"][$k]);
                if (empty($_SESSION["keranjang_belanja"]))
                    unset($_SESSION["keranjang_belanja"]);
            }
        }
        break;

    case "update":
        $itemArray = array($id_data => array('id_data' => $id_data, 'jenis_bahan' => $jenis_bahan, 'jumlah' => $jumlah, 'harga' => $harga));
        if (!empty($_SESSION["keranjang_belanja"])) {
            foreach ($_SESSION["keranjang_belanja"] as $k => $v) {
                if ($_GET["id_data"] == $k)
                    $_SESSION["keranjang_belanja"] = array_merge($_SESSION["keranjang_belanja"], $itemArray);
            }
        }
        break;
}
?>

<div class="row">
    <h2 style="margin-bottom:30px;">Keranjang Belanja</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th width="40%">Nama</th>
                <th>Harga</th>
                <th width="10%">QTY</th>
                <th>Sub Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 0;
            $sub_total = 0;
            $total = 0;
            $total_berat = 0;
            if (!empty($_SESSION["keranjang_belanja"])) :
                foreach ($_SESSION["keranjang_belanja"] as $item) :
                    $no++;
                    $sub_total = $item["jumlah"] * $item['harga'];
                    $total += $sub_total;
            ?>
                    <input type="hidden" name="id_data[]" class="id_data" value="<?php echo $item["id_data"]; ?>" />
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $item["id_data"]; ?></td>
                        <td><?php echo $item["jenis_bahan"]; ?></td>
                        <td>Rp. <?php echo number_format($item["harga"], 0, ',', '.'); ?> </td>
                        <td>
                            <input type="number" min="1" value="<?php echo $item["jumlah"]; ?>" class="form-control" id="jumlah<?php echo $no; ?>" name="jumlah[]">
                            <script>
                                $("#jumlah<?php echo $no; ?>").bind('change', function() {
                                    var jumlah<?php echo $no; ?> = $("#jumlah<?php echo $no; ?>").val();
                                    $("#jumlaha<?php echo $no; ?>").val(jumlah<?php echo $no; ?>);
                                });
                                $("#jumlah<?php echo $no; ?>").keydown(function(event) {
                                    return false;
                                });
                            </script>

                        </td>
                        <td>Rp. <?php echo number_format($sub_total, 0, ',', '.'); ?> </td>

                        <td>
                            <form method="get">
                                <input type="hidden" name="id_data" value="<?php echo $item['id_data']; ?>" class="form-control">
                                <input type="hidden" name="aksi" value="update" class="form-control">
                                <input type="hidden" name="halaman" value="keranjang-belanja" class="form-control">
                                <input type="hidden" name="jumlah" value="<?php echo $item["jumlah"]; ?>" id="jumlaha<?php echo $no; ?>" value="" class="form-control">
                                <input type="submit" class="btn btn-warning btn-xs" value="Update">
                            </form>
                            <a href="index.php?halaman=keranjang-belanja&id_data=<?php echo $item['id_data']; ?>&aksi=hapus" class="btn btn-danger btn-xs" role="button">Delete</a>
                        </td>
                    </tr>
            <?php
                endforeach;
            endif;
            ?>
        </tbody>
    </table>
    <h3>Total Pembayaran Rp. <?php echo number_format($total, 0, ',', '.'); ?> </h3>
    <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>

                <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" id="username" placeholder="Username" required>
                        <div class="invalid-feedback">
                            Your username is required.
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <div class="col-12">
                    <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>

                <div class="col-md-5">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" id="country" required>
                        <option value="">Choose...</option>
                        <option>United States</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="state" class="form-label">State</label>
                    <select class="form-select" id="state" required>
                        <option value="">Choose...</option>
                        <option>California</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="zip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="zip" placeholder="" required>
                    <div class="invalid-feedback">
                        Zip code required.
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Save this information for next time</label>
            </div>

            <hr class="my-4">

            <h4 class="mb-3">Payment</h4>

            <div class="my-3">
                <div class="form-check">
                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                    <label class="form-check-label" for="credit">Credit card</label>
                </div>
                <div class="form-check">
                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="debit">Debit card</label>
                </div>
                <div class="form-check">
                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="paypal">PayPal</label>
                </div>
            </div>

            <div class="row gy-3">
                <div class="col-md-6">
                    <label for="cc-name" class="form-label">Name on card</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback">
                        Name on card is required
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="cc-number" class="form-label">Credit card number</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    <div class="invalid-feedback">
                        Credit card number is required
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="cc-expiration" class="form-label">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    <div class="invalid-feedback">
                        Expiration date required
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="cc-cvv" class="form-label">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
    </div>
</div>