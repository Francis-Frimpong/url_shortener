function copyToClipboard(btn, text) {
  navigator.clipboard.writeText(text);

  btn.innerText = "Copied!";
  btn.classList.add("copied");

  setTimeout(() => {
    btn.innerText = "Copy";
    btn.classList.remove("copied");
  }, 2000);
}
