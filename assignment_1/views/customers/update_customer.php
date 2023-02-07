<main class="container__main">
    <div class="modal-body">
        <form action="?url=create-customer" method="POST" enctype="multipart/form-data">
        <input type="hidden" class="form-control fs-3" id="id" 
                                name="id" value="<?= $each->id; ?>">
            <div class="mb-3">
                <label for="username" class="form-label fs-3">Tên khách hàng</label>
                    <input type="text" class="form-control fs-3" id="username" placeholder="Tên khách hàng"
                        name="username" value="<?= $each->ten_kh; ?>">
                        </div>
                            
                        <div class="mb-3">
                            <label for="sdt" class="form-label fs-3">Mật khẩu người dùng</label>
                            <input type="text" class="form-control fs-3" id="sdt"
                            placeholder="sdt người dùng" name="sdt" values="<?= $each->sdt; ?>">
                        </div>
                            <div class="modal-footer">
                                <button class="fs-4 btn btn-danger" name="btn-submit" type="submit">Thêm khách hàng</button>
                        </div>
        </form>
    </div>
</main>