<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Skill Swap Platform - Swap Request</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap');

    body {
      font-family: 'Patrick Hand', cursive;
      background-color: #121212;
      color: #e0e0e0;
      user-select: none;
    }
    .container {
      border: 1.5px solid #ccc;
      border-radius: 0.75rem;
      padding: 1.5rem;
      max-width: 900px;
      margin: 2rem auto;
      background-color: #1e1e1e;
    }

    .header-bar {
      border-bottom: 1.5px solid #ccc;
      padding-bottom: 0.75rem;
      margin-bottom: 1.5rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .header-title {
      font-weight: 700;
      font-size: 1.25rem;
      letter-spacing: 0.05em;
    }
    .profile-photo {
      background-color: #222;
      border: 1.5px solid #666;
      border-radius: 0.375rem;
      width: 48px;
      height: 48px;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }
    .profile-photo img {
      width: 48px;
      height: 48px;
      object-fit: cover;
      border-radius: 0.375rem;
      transition: transform 0.3s ease;
    }
    .profile-photo:hover img {
      transform: scale(1.1);
    }
    .select-dropdown, .search-input {
      border: 1.3px solid #ccc;
      border-radius: 0.375rem;
      background: transparent;
      color: #e0e0e0;
      font-family: 'Patrick Hand', cursive;
      font-size: 0.95rem;
      padding: 0.3rem 0.75rem;
      outline-offset: 3px;
      min-width: 120px;
      transition: border-color 0.3s ease;
    }
    .select-dropdown:focus, .search-input:focus {
      border-color: #4ade80;
      outline: none;
    }
    .cards-list {
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
      margin-bottom: 1.75rem;
    }
    .card {
      border: 1.5px solid #ccc;
      border-radius: 0.75rem;
      padding: 1rem 1.25rem;
      display: flex;
      gap: 1rem;
      background-color: #292929;
    }
    .card-profile-photo {
      background-color: #222;
      border: 1.5px solid #666;
      border-radius: 0.5rem;
      width: 80px;
      height: 80px;
      flex-shrink: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }
    .card-profile-photo img {
      width: 72px;
      height: 72px;
      border-radius: 0.5rem;
      object-fit: cover;
    }
    .rating-text {
      position: absolute;
      bottom: 4px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 0.8rem;
      color: #bbb;
      user-select: text;
    }
    .card-details {
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .card-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 1.15rem;
      font-weight: 700;
    }
    .card-header .status {
      font-weight: 700;
      user-select: text;
    }
    .status-pending {
      color: #4ade80;
    }
    .status-rejected {
      color: #ef4444; 
    }
    .card-skills {
      font-size: 0.85rem;
      margin-top: 0.3rem;
      user-select: text;
    }
    .skill-tag {
      border: 1.5px solid #4ade80;
      border-radius: 0.75rem;
      padding: 0 0.6rem;
      color: #4ade80;
      font-weight: 600;
      margin-left: 0.4rem;
      font-size: 0.85rem;
      display: inline-block;
    }
    .skill-offered-label {
      color: #4ade80;
    }
    .skill-wanted-label {
      color: #22d3ee;
      margin-left: 1rem;
    }
    .card-actions {
      display: flex;
      gap: 1rem;
      margin-top: 0.6rem;
    }
    .btn-accept, .btn-reject {
      font-family: 'Patrick Hand', cursive;
      font-weight: 700;
      font-size: 1rem;
      border-radius: 0.75rem;
      padding: 0.22rem 1rem;
      cursor: pointer;
      user-select: none;
      transition: background-color 0.3s ease;
      border: 1.8px solid transparent;
      outline-offset: 3px;
      outline: none;
    }
    .btn-accept {
      color: #4ade80;
      border-color: #4ade80;
      background-color: transparent;
    }
    .btn-accept:hover, .btn-accept:focus {
      background-color: #4ade80;
      color: #121212;
      outline: none;
    }
    .btn-reject {
      color: #ef4444;
      border-color: #ef4444;
      background-color: transparent;
    }
    .btn-reject:hover, .btn-reject:focus {
      background-color: #ef4444;
      color: #121212;
      outline: none;
    }
    .pagination {
      display: flex;
      justify-content: center;
      color: #ccc;
      font-size: 1rem;
      user-select: none;
      gap: 1rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      cursor: default;
      padding-top: 0.25rem;
    }
    .pagination > * {
      cursor: pointer;
      user-select: none;
      transition: color 0.3s ease;
    }
    .pagination > *:hover {
      color: #4ade80;
    }
    .pagination > .current-page {
      color: #4ade80;
      pointer-events: none;
    }
    .search-wrapper {
      flex-grow: 1;
      margin-left: 1rem;
      display: flex;
      justify-content: flex-end;
    }
    @media (max-width: 600px) {
      .card {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }
      .card-details {
        margin-top: 0.75rem;
      }
      .card-header {
        flex-direction: column;
        gap: 0.4rem;
      }
      .search-wrapper {
        margin-left: 0.5rem;
        margin-top: 1rem;
        justify-content: center;
      }
      .header-bar {
        flex-direction: column;
        gap: 0.75rem;
        align-items: flex-start;
      }
    }
  </style>
</head>
<body>

  <main class="container" aria-label="Skill Swap Swap Request Screen 6">
 
    <header class="header-bar" role="banner" aria-label="Primary navigation and user profile">
      <h1 class="header-title" tabindex="0">Skill Swap Platform</h1>
      <nav class="flex items-center gap-4" aria-label="Primary navigation and search">
        <a href="#" class="text-sm font-semibold hover:underline focus:outline-offset-4 focus:outline-green-400" tabindex="0">Home</a>
        <select class="select-dropdown" aria-label="Filter by status" name="statusFilter" id="statusFilter" aria-live="polite" tabindex="0">
          <option value="all">All Statuses</option>
          <option value="pending" selected>Pending</option>
          <option value="accepted">Accepted</option>
          <option value="rejected">Rejected</option>
        </select>
        <div class="search-wrapper">
          <input type="search" class="search-input" id="searchInput" aria-label="Search users by name or skill" placeholder="search" tabindex="0" />
        </div>
        <div class="profile-photo" aria-label="User profile photo" tabindex="0" role="img" aria-describedby="profileName" >
          <a href="S_3.php"><img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/778dc3a9-9f72-4319-a044-71447f9fd5f3.png" alt="Square profile photo of a young person wearing glasses and a purple shirt with a geeky vibe" 
            onerror="this.onerror=null;this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/cd47b21a-310e-4788-9a9d-57253a441c8b.png;" />
       </a> </div>
      </nav>
    </header>

    <section class="cards-list" aria-live="polite" aria-relevant="additions removals" aria-label="Swap requests list">

      <article class="card" role="listitem" tabindex="0" aria-label="Swap request from Marc Demo with status pending">
        <div class="card-profile-photo" aria-hidden="true">
          <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/924135d1-884b-4d28-acdf-47491e30300c.png" alt="Round profile photo placeholder showing a smiling user with light background" 
            onerror="this.onerror=null;this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b8127787-77b0-4a1b-aeb3-db95f127b7f5.png';" />
          <div class="rating-text" aria-label="User rating 3.9 out of 5" tabindex="0">rating 3.9/5</div>
        </div>
        <div class="card-details">
          <div>
            <div class="card-header">
              <span aria-label="User name">Marc Demo</span>
              <span class="status status-pending" aria-live="polite" aria-atomic="true" aria-label="Request status pending">Pending</span>
            </div>
            <div class="card-skills">
              <span class="skill-offered-label">Skills offered ➔</span><span class="skill-tag" aria-label="Skill offered JavaScript">Java Script</span>
              <span class="skill-wanted-label">Skill wanted ➔</span><span class="skill-tag" aria-label="Skill wanted Kubernetes">Kubernetes</span>
            </div>
          </div>

          <div class="card-actions" role="group" aria-label="Actions for Marc Demo's swap request">
            <button class="btn-accept" aria-label="Accept swap request from Marc Demo" tabindex="0">Accept</button>
            <button class="btn-reject" aria-label="Reject swap request from Marc Demo" tabindex="0">Reject</button>
          </div>
        </div>
      </article>

      <article class="card" role="listitem" tabindex="0" aria-label="Swap request from user named name with status rejected">
        <div class="card-profile-photo" aria-hidden="true">
          <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/6c1d9a92-351a-4511-9cc5-c574036cf9b9.png" alt="Round profile photo placeholder showing a smiling user with soft shadows and pastel background" 
            onerror="this.onerror=null;this.src='https://placehold.co/80x80?text=User';" />
          <div class="rating-text" aria-label="User rating 3.9 out of 5" tabindex="0">rating 3.9/5</div>
        </div>
        <div class="card-details">
          <div>
            <div class="card-header">
              <span aria-label="User name">name</span>
              <span class="status status-rejected" aria-live="polite" aria-atomic="true" aria-label="Request status rejected">Rejected</span>
            </div>
            <div class="card-skills">
              <span class="skill-offered-label">Skills offered ➔</span><span class="skill-tag" aria-label="Skill offered not specified">—</span>
              <span class="skill-wanted-label">Skill wanted ➔</span><span class="skill-tag" aria-label="Skill wanted not specified">—</span>
            </div>
          </div>
        </div>
      </article>

    </section>
    <nav aria-label="Pagination" role="navigation" class="pagination" tabindex="0">
      <span class="page-link" aria-label="Previous page" tabindex="0" role="button" aria-disabled="true"><</span>
      <span class="page-link current-page" aria-current="page" tabindex="0">1</span>
      <span class="page-link" tabindex="0" role="button" aria-label="Go to page 2">2</span>
      <span class="page-link" tabindex="0" role="button" aria-label="Go to page 3">3</span>
      <span class="page-link" aria-label="Next page" tabindex="0" role="button">></span>
    </nav>

  </main>
</body>
</html>

