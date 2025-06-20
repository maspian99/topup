				<?php $this->extend('templateadmin'); ?>
				
				<?php $this->section('css'); ?>
				<?php $this->endSection(); ?>
				
				<?php $this->section('content'); ?>
				<div class="content">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								
								<?= $this->include('header-admin'); ?>

								<div class="row justify-content-center">
									<div class="col-md-10">
										<div class="card">
											<div class="card-body">
												<h5 class="mb-3">Tambah Voucher</h5>

												<?= alert(); ?>

												<form action="" method="POST" enctype="multipart/form-data">
													<div class="form-group row">
														<label class="col-form-label col-md-4 text-white">Kode Voucher</label>
														<div class="col-md-8">
															<input type="text" class="form-control" autocomplete="off" name="voucher">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label col-md-4 text-white">Diskon %</label>
														<div class="col-md-8">
															<input type="number" class="form-control" autocomplete="off" name="diskon">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label col-md-4 text-white">Min Transaksi</label>
														<div class="col-md-8">
															<input type="number" class="form-control" autocomplete="off" name="min">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label col-md-4 text-white">Max Potongan</label>
														<div class="col-md-8">
															<input type="number" class="form-control" autocomplete="off" name="max_diskon">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label col-md-4 text-white">Limit Digunakan</label>
														<div class="col-md-8">
															<input type="number" class="form-control" autocomplete="off" name="max_use">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label col-md-4 text-white">Status</label>
														<div class="col-md-8">
															<select name="status" class="form-control">
																<option value="Active">Active</option>
																<option value="Limit" hidden>Limit</option>
																<option value="Disable">Disable</option>
															</select>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-form-label col-md-4 text-white">Produk</label>
														<div class="col-md-8">
															<select name="type_produk" class="form-control">
																<option value="all">Semua Produk</option>
																<option value="custom">Produk Tertentu</option>
															</select>
														</div>
													</div>
													<div class="form-group row d-none" id="type_custom">
														<label class="col-form-label col-md-4 text-white">Pilih Produk</label>
														<div class="col-md-8">
															<?php foreach ($product as $loop): ?>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="product-<?= $loop['id']; ?>" name="produk[]" value="<?= $loop['id']; ?>">
																<label class="custom-control-label text-white" for="product-<?= $loop['id']; ?>" style="padding-top: 4px;"><?= $loop['games']; ?> - <?= $loop['product']; ?></label>
															</div>
															<?php endforeach ?>
														</div>
													</div>
													<a href="<?= base_url(); ?>/admin/voucher" class="btn btn-warning float-left">Kembali</a>
													<div class="text-right">
														<button class="btn text-white" type="reset">Batal</button>
														<button class="btn btn-primary" type="submit" name="tombol" value="submit">Simpan</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php $this->endSection(); ?>
				
				<?php $this->section('js'); ?>
				<script>
					$("select[name=type_produk]").on('change', function() {
						if ($(this).val() == 'custom') {
							$("#type_custom").removeClass('d-none');
						} else {
							$("#type_custom").addClass('d-none');
						}
					});
				</script>
				<?php $this->endSection(); ?>