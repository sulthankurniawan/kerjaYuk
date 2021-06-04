const swalConfirm = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-red mx-2',
        cancelButton: 'btn btn-grey mx-2'
    },
    buttonsStyling: false
})

const swalSuccess = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-green mx-2',
        cancelButton: 'btn btn-grey mx-2'
    },
    buttonsStyling: false
})

let alertMessage = $(".message").data("message");
if(alertMessage) {
    swalSuccess.fire('Berhasil!',
    alertMessage,
    'success')
}

$(".btn-confirm").on("click", function (e) {
    e.preventDefault();
    const href = $(this).attr("href");

    swalConfirm.fire({
        icon: 'warning',
        text: 'Tambah ke wishlist?',
        focusConfirm: false,
        showCancelButton: true,
        confirmButtonText: 'Tambah',
        confirmButtonColor: '#69af44',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
            $(".message").data("message", "Testing");
        }
    });
})