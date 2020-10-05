async function avatar(elementId, ava) {
    CKFinder.popup({
        chooseFiles: true,
        type: "Avatar",
        width: 800,
        height: 600,
        onInit: function (finder) {
            finder.on("files:choose", function (evt) {
                var file = evt.data.files.first();
                var output = document.getElementById(elementId);
                var out = document.getElementById(ava);
                output.value = file.getUrl();
                out.src = file.getUrl();

                $.ajax({
                    type: "POST",
                    url: "/change-avt",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                    data: { avt: file.getUrl() },
                    success: function (result) {
                        console.log("result: " + result);
                    },
                });
            });

            finder.on("file:choose:res                         ", function (
                evt
            ) {
                var output = document.getElementById(elementId);
                output.value = evt.data.resizedUrl;
            });
        },
    });
}
