function filterBlock() {
  document.querySelector("#App-filter-div").classList.toggle('hidden');
}
document.querySelector("#App-filter-heading").addEventListener('click',filterBlock);
document.querySelector("#App-filter-cross").addEventListener('click',filterBlock);