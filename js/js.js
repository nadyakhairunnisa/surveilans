function konfirmasi_reset()
{
	var konfirmasi = confirm("Apakah Anda yakin ingin mereset data ?")
	
	if (konfirmasi == true)
	{
		return true;
	}	
	else
	{
		return false;
	}
}

function konfirmasi_hapus()
{
	var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data? (WARNING: Data yang sudah dihapus tidak dapat dikembalikan.)")
	
	if (konfirmasi == true)
	{
		return true;
	}

	else
	{
		return false;
	}
}

function konfirmasi_tambah()
{
	var konfirmasi = confirm("Apakah Anda yakin ingin menambah data ini?")

	if (konfirmasi == true)
	{
		return true;
	}

	else
	{
		return false;
	}
}

function konfirmasi_ubah()
{
	var konfirmasi = confirm("Apakah Anda yakin ingin mengubah data ini?")

	if (konfirmasi == true)
	{
		return true;
	}

	else
	{
		return false;
	}
}