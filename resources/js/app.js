import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

// document.querySelectorAll(".ckeditor").forEach((editor) => {
//     ClassicEditor.create(editor).catch((error) => {
//         console.error(error);
//     });
// });
document.querySelectorAll(".ckeditor").forEach((editor) => {
    ClassicEditor.create(editor, {
        extraPlugins: [MyCustomUploadAdapterPlugin],
    }).catch((error) => {
        console.error(error);
    });
});
// import SimpleUploadAdapter from "@ckeditor/ckeditor5-upload/src/adapters/simpleuploadadapter";

// ClassicEditor.create(document.querySelector(".ckeditor")).catch((error) => {
//     console.error(error);
// });

// ClassicEditor.create(document.querySelector(".ckeditor"), {
//     extraPlugins: [MyCustomUploadAdapterPlugin],
// }).catch((error) => {
//     console.error(error);
// });

function MyCustomUploadAdapterPlugin(editor) {
    editor.plugins.get("FileRepository").createUploadAdapter = (loader) => {
        return new MyUploadAdapter(loader);
    };
}

class MyUploadAdapter {
    constructor(loader) {
        this.loader = loader;
    }

    upload() {
        return this.loader.file.then(
            (file) =>
                new Promise((resolve, reject) => {
                    const reader = new FileReader();
                    reader.onload = () => {
                        resolve({ default: reader.result });
                    };
                    reader.onerror = (error) => reject(error);
                    reader.readAsDataURL(file);
                })
        );
    }

    abort() {
        // Handle aborting the upload process if necessary
    }
}
