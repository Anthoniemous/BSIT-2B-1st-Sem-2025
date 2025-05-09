document.addEventListener('DOMContentLoaded', () => {
  const regionSelect = document.getElementById('region');
  const provinceSelect = document.getElementById('province');
  const municipalitySelect = document.getElementById('municipality');
  const barangaySelect = document.getElementById('barangay');

  // Load regions on page load
  fetch('https://psgc.gitlab.io/api/regions/')
    .then(res => res.json())
    .then(regions => {
      regions.forEach(region => {
        const option = new Option(region.name, region.code);
        regionSelect.add(option);
      });
    });

  // Load provinces when a region is selected
  regionSelect.addEventListener('change', () => {
    provinceSelect.length = 1;
    municipalitySelect.length = 1;
    barangaySelect.length = 1;

    fetch(`https://psgc.gitlab.io/api/regions/${regionSelect.value}/provinces/`)
      .then(res => res.json())
      .then(provinces => {
        provinces.forEach(province => {
          const option = new Option(province.name, province.code);
          provinceSelect.add(option);
        });
      });
  });

  // Load municipalities when a province is selected
  provinceSelect.addEventListener('change', () => {
    municipalitySelect.length = 1;
    barangaySelect.length = 1;

    fetch(`https://psgc.gitlab.io/api/provinces/${provinceSelect.value}/cities-municipalities/`)
      .then(res => res.json())
      .then(cities => {
        cities.forEach(city => {
          const option = new Option(city.name, city.code);
          municipalitySelect.add(option);
        });
      });
  });

  // Load barangays when a municipality is selected
  municipalitySelect.addEventListener('change', () => {
    barangaySelect.length = 1;

    fetch(`https://psgc.gitlab.io/api/cities-municipalities/${municipalitySelect.value}/barangays/`)
      .then(res => res.json())
      .then(barangays => {
        barangays.forEach(brgy => {
          const option = new Option(brgy.name, brgy.code);
          barangaySelect.add(option);
        });
      });
  });
});
