(function () {
    document.getElementById('get-one-post').addEventListener('click', function (event) {
        event.preventDefault();

        var form = this.parentNode,
            request = new Promise(function (resolve, reject) {
                var xhr = new XMLHttpRequest(),
                    data = new FormData(form);
                data.append('offset', document.getElementsByClassName('single-post').length + 1);
                xhr.responseType = 'json';
                xhr.open('POST', form.getAttribute('action'), true);
                xhr.onload = function () {
                    var status = xhr.status;
                    if (status === 200) {
                        resolve(xhr.response.data);
                    } else {
                        reject(status);
                    }
                };
                xhr.send(data);
            });

        request.then(function (data) {
            document.getElementById('post-container').insertAdjacentHTML('beforeend', wp.template('single')(data));
        }, function (reason) {
            // handle error - not found or other
        });
    });
})();
