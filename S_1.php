<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Skill Swap Platform</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-color: #121212;
      color: #e0e0e0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .card {
      border: 1px solid #3a3a3a;
      border-radius: 10px;
      padding: 16px;
      margin-bottom: 16px;
      background-color: #1f1f1f;
    }
    .skill-badge {
      display: inline-block;
      border: 1px solid #606060;
      border-radius: 9999px;
      padding: 3px 10px;
      font-size: 0.8rem;
      margin-right: 8px;
      background-color: #2a2a2a;
    }
    .skill-offered {
      color: #93c572; 
    }
    .skill-wanted {
      color: #6ca0cc;
    button.request-btn {
      background-color: #2c7a7b;
      color: white;
      padding: 8px 14px;
      border-radius: 8px;
      font-weight: 600;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    button.request-btn:hover {
      background-color: #285e61;
    }
    .pagination > button {
      background: none;
      border: none;
      color: #a0a0a0;
      font-weight: 600;
      padding: 6px 10px;
      cursor: pointer;
      font-size: 1.1rem;
      user-select: none;
    }
    .pagination > button.active,
    .pagination > button:hover {
      color: #2c7a7b;
      font-weight: 700;
    }
    select, input[type="text"] {
      background-color: #2a2a2a;
      border: 1px solid #444;
      border-radius: 6px;
      color: #e0e0e0;
      padding: 6px 10px;
      font-size: 0.9rem;
    }
    input[type="text"]::placeholder {
      color: #777;
    }
    input[type="text"] {
      width: 220px;
    }
    header {
      border-bottom: 1px solid #3a3a3a;
      padding-bottom: 12px;
      margin-bottom: 24px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    header h1 {
      font-weight: 700;
      font-size: 1.5rem;
    }
    header button.login-btn {
      background: none;
      color: #2c7a7b;
      border: 2px solid #2c7a7b;
      padding: 6px 16px;
      font-weight: 700;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease, color 0.3s ease;
    }
    header button.login-btn:hover {
      background-color: #2c7a7b;
      color: white;
    }
    .filter-search {
      margin-bottom: 20px;
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
      align-items: center;
    }
    .flex-center {
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .profile-photo {
      background-color: #444;
      border-radius: 9999px;
      width: 72px;
      height: 72px;
      flex-shrink: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #bbb;
      font-weight: 700;
      font-size: 0.9rem;
      user-select: none;
    }
    .rating {
      color: #aaa;
      font-size: 0.9rem;
      font-weight: 500;
    }
    @media (max-width: 640px) {
      input[type="text"] {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <main class="max-w-4xl mx-auto p-4">
    <header>
      <h1>Skill Swap Platform</h1>
      <a href="S_2.php"><button class="login-btn" aria-label="Login to your account">Login</button></a>
    </header>

    <section class="filter-search" aria-label="Filter skills and search users">
      <select aria-label="Filter by availability" id="availabilityFilter" name="availability">
        <option value="all" selected>Availability</option>
        <option value="available">Available</option>
        <option value="busy">Busy</option>
        <option value="offline">Offline</option>
      </select>
      <input type="text" id="searchInput" name="search" placeholder="Search users or skills" aria-label="Search users or skills" />
      <button id="searchBtn" aria-label="Search" class="request-btn">Search</button>
    </section>


  </main>

  <script>
    
    const profiles = [
      {
        name: "Marc Demo",
        availability: "available",
        skillsOffered: ["Java Script", "Python"],
        skillsWanted: ["Photoshop", "Graphic designer"],
        rating: 3.9,
        photoAlt: "Round placeholder profile photo with initials M D",
      },
      {
        name: "Michell",
        availability: "busy",
        skillsOffered: ["Java Script", "Python"],
        skillsWanted: ["Photoshop", "Graphic designer"],
        rating: 2.5,
        photoAlt: "Round placeholder profile photo with initials M",
      },
      {
        name: "Joe Wills",
        availability: "available",
        skillsOffered: ["Java Script", "Python"],
        skillsWanted: ["Photoshop", "Graphic designer"],
        rating: 4.0,
        photoAlt: "Round placeholder profile photo with initials J W",
      },
      {
        name: "Anna Smith",
        availability: "available",
        skillsOffered: ["React", "CSS"],
        skillsWanted: ["Video Editing", "Illustrator"],
        rating: 4.6,
        photoAlt: "Round placeholder profile photo with initials A S",
      },
      {
        name: "David Lee",
        availability: "offline",
        skillsOffered: ["Python", "Django"],
        skillsWanted: ["Public Speaking", "SEO"],
        rating: 3.2,
        photoAlt: "Round placeholder profile photo with initials D L",
      },
      {
        name: "Jessica Brown",
        availability: "available",
        skillsOffered: ["Content Writing", "SEO"],
        skillsWanted: ["Graphic Design", "Photography"],
        rating: 4.8,
        photoAlt: "Round placeholder profile photo with initials J B",
      },
      {
        name: "Michael Johnson",
        availability: "busy",
        skillsOffered: ["Node.js", "JavaScript"],
        skillsWanted: ["UI/UX Design", "Docker"],
        rating: 3.5,
        photoAlt: "Round placeholder profile photo with initials M J",
      },
      {
        name: "Sara Wilson",
        availability: "available",
        skillsOffered: ["Marketing", "Social Media"],
        skillsWanted: ["Python", "Excel"],
        rating: 4.1,
        photoAlt: "Round placeholder profile photo with initials S W",
      }
    ];

    const profilesPerPage = 3;
    let currentPage = 1;

    function createSkillBadge(skill, type) {
      const span = document.createElement('span');
      span.textContent = skill;
      span.className = `skill-badge ${type === 'offered' ? 'skill-offered' : 'skill-wanted'}`;
      return span;
    }

    function createProfileCard(profile) {
      const card = document.createElement('article');
      card.className = 'card flex items-center gap-6';
      card.setAttribute('tabindex', '0');

      card.onclick = () => {
        window.location.href = 'S_4.php';
      };

      const photo = document.createElement('div');
      photo.className = 'profile-photo';
      photo.textContent = profile.name.split(' ').map(n => n[0].toUpperCase()).join('');
      photo.setAttribute('aria-label', `Profile photo placeholder for ${profile.name}`);

      const details = document.createElement('div');
      details.className = 'flex-1';

      const nameEl = document.createElement('h2');
      nameEl.textContent = profile.name;
      nameEl.className = 'text-xl font-semibold mb-1';

      const skillsOfferedEl = document.createElement('div');
      skillsOfferedEl.className = 'mb-1';
      const offeredLabel = document.createElement('span');
      offeredLabel.textContent = 'Skills Offered => ';
      offeredLabel.style.color = '#93c572';
      skillsOfferedEl.appendChild(offeredLabel);
      profile.skillsOffered.forEach(skill => {
        skillsOfferedEl.appendChild(createSkillBadge(skill, 'offered'));
      });

      const skillsWantedEl = document.createElement('div');
      skillsWantedEl.className = 'mb-1';
      const wantedLabel = document.createElement('span');
      wantedLabel.textContent = 'Skill wanted => ';
      wantedLabel.style.color = '#6ca0cc';
      skillsWantedEl.appendChild(wantedLabel);
      profile.skillsWanted.forEach(skill => {
        skillsWantedEl.appendChild(createSkillBadge(skill, 'wanted'));
      });

      details.appendChild(nameEl);
      details.appendChild(skillsOfferedEl);
      details.appendChild(skillsWantedEl);

      const aside = document.createElement('div');
      aside.className = 'flex flex-col items-end gap-2';

      const requestBtn = document.createElement('button');
      requestBtn.className = 'request-btn';
      requestBtn.textContent = 'Request';
      requestBtn.setAttribute('aria-label', `Send a skill swap request to ${profile.name}`);
      requestBtn.onclick = (event) => {
        event.stopPropagation(); 
        window.location.href = 'S_6.php';
      };

      const ratingEl = document.createElement('div');
      ratingEl.className = 'rating';
      ratingEl.textContent = `rating ${profile.rating.toFixed(1)}/5`;

      aside.appendChild(requestBtn);
      aside.appendChild(ratingEl);

      card.appendChild(photo);
      card.appendChild(details);
      card.appendChild(aside);

      return card;
    }

    function renderProfiles(profilesToRender) {
      const container = document.getElementById('profilesList');
      container.innerHTML = '';
      profilesToRender.forEach(profile => {
        container.appendChild(createProfileCard(profile));
      });
    }

    function renderPagination(totalPages) {
      const pagination = document.querySelector('nav.pagination');
      pagination.innerHTML = '';

      function createPageBtn(num) {
        const btn = document.createElement('button');
        btn.textContent = num;
        btn.className = num === currentPage ? 'active' : '';
        btn.onclick = () => {
          if (currentPage !== num) {
            currentPage = num;
            updateView();
          }
        };
        btn.setAttribute('aria-label', `Page ${num}`);
        return btn;
      }

      // Prev Button
      const prevBtn = document.createElement('button');
      prevBtn.textContent = '<';
      prevBtn.disabled = currentPage === 1;
      prevBtn.setAttribute('aria-label', 'Previous page');
      prevBtn.onclick = () => {
        if (currentPage > 1) {
          currentPage--;
          updateView();
        }
      };
      pagination.appendChild(prevBtn);

      let startPage = 1;
      let endPage = totalPages;
      if (totalPages > 7) {
        if (currentPage <= 4) {
          startPage = 1;
          endPage = 7;
        } else if (currentPage + 3 >= totalPages) {
          startPage = totalPages - 6;
          endPage = totalPages;
        } else {
          startPage = currentPage - 3;
          endPage = currentPage + 3;
        }
      }
      for (let i = startPage; i <= endPage; i++) {
        pagination.appendChild(createPageBtn(i));
      }

      const nextBtn = document.createElement('button');
      nextBtn.textContent = '>';
      nextBtn.disabled = currentPage === totalPages;
      nextBtn.setAttribute('aria-label', 'Next page');
      nextBtn.onclick = () => {
        if (currentPage < totalPages) {
          currentPage++;
          updateView();
        }
      };
      pagination.appendChild(nextBtn);
    }

    function filterAndSearchProfiles() {
      const availabilityFilter = document.getElementById('availabilityFilter').value;
      const searchTerm = document.getElementById('searchInput').value.toLowerCase();

      return profiles.filter(profile => {
        const availabilityMatch = availabilityFilter === 'all' || profile.availability === availabilityFilter;

        const searchMatch =
          profile.name.toLowerCase().includes(searchTerm) ||
          profile.skillsOffered.some(skill => skill.toLowerCase().includes(searchTerm)) ||
          profile.skillsWanted.some(skill => skill.toLowerCase().includes(searchTerm));

        return availabilityMatch && searchMatch;
      });
    }

    function updateView() {
      const filteredProfiles = filterAndSearchProfiles();

      const totalPages = Math.ceil(filteredProfiles.length / profilesPerPage) || 1;
      if (currentPage > totalPages) currentPage = totalPages;

      const startIndex = (currentPage - 1) * profilesPerPage;
      const profilesToShow = filteredProfiles.slice(startIndex, startIndex + profilesPerPage);

      renderProfiles(profilesToShow);
      renderPagination(totalPages);
    }


    document.getElementById('searchBtn').addEventListener('click', () => {
      currentPage = 1;
      updateView();
    });

    document.getElementById('searchInput').addEventListener('keypress', e => {
      if (e.key === 'Enter') {
        currentPage = 1;
        updateView();
      }
    });

    document.getElementById('availabilityFilter').addEventListener('change', () => {
      currentPage = 1;
      updateView();
    });

    updateView();
  </script>
</body>
</html>
