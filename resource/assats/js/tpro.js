function showContent(contentType) {
    const dynamicContent = document.getElementById('dynamic-content');
    const header = document.getElementById('head');
    const head = document.getElementById('head');
    dynamicContent.innerHTML = ''; // Clear existing content
    head.innerHTML = '';
    if (contentType === 'subject') {
        head.innerHTML = 'Subject';
        // Show subject-related buttons
        const subjectButtons = `
        <a class="arrow" href="teacherprofile.html" ><i class="fa-solid fa-arrow-left"></i></a> 
            <div class="subject-buttons">
                <button onclick="showSubjectContent('Amharic')">Amharic<br>GRADE-3</button>
                <button onclick="showSubjectContent('English')">English<br>GRADE-6</button>
                <button onclick="showSubjectContent('Physics')">Physics<br>GRADE-8</button>
                <button onclick="showSubjectContent('Amharic')">Amharic<br>GRADE-3</button>
                <button onclick="showSubjectContent('English')">English<br>GRADE-6</button>
                <button onclick="showSubjectContent('Physics')">Physics<br>GRADE-8</button>
                
            </div>
        `;
        dynamicContent.innerHTML = subjectButtons;
       
    } 
    else if (contentType === 'announcement') {
        head.innerHTML = 'Announcement';
        // Show announcement content
        dynamicContent.innerHTML = `
        <a class="arrow" href="teacherprofile.html" ><i class="fa-solid fa-arrow-left"></i></a> 
            <h3>Announcements</h3>
            <p>Welcome to the teacher's portal. Stay tuned for more updates.</p>
        `;
    }
    else if (contentType === 'teacherResource') {
        head.innerHTML = 'Teacher Resource';
        // Show teacher resources
        dynamicContent.innerHTML = `
        <a class="arrow" href="teacherprofile.html" ><i class="fa-solid fa-arrow-left"></i></a> 
            <h3>Teacher Resources</h3>
            <p>Access materials, lesson plans, and other resources here.</p>
        `;
    }
    else if (contentType === 'settings') {
        head.innerHTML = 'Setting';
        // Show settings content
        dynamicContent.innerHTML = `
        <a class="arrow" href="teacherprofile.html" ><i class="fa-solid fa-arrow-left"></i></a> 
            <h3>Settings</h3>
            <p>Adjust your profile and preferences here.</p>
        `;
    }
    else if (contentType === 'logout') {
        head.innerHTML = 'logout';
        // Show logout message
        dynamicContent.innerHTML = `
              <a class="arrow" href="teacherprofile.html" ><i class="fa-solid fa-arrow-left"></i></a> 
            <h3>Logout</h3>
            <p>You have been logged out successfully.</p>
        `;
    }
}

function showSubjectContent(subject) {
    const dynamicContent = document.getElementById('dynamic-content');
    if (subject === 'Amharic') {
        dynamicContent.innerHTML = `
        <a class="arrow" href="teacherprofile.html" ><i class="fa-solid fa-arrow-left"></i></a> 
            <div class="subject-text">
                <h3>${subject} Classes</h3>
                <p>The Listed Class are ${subject} Classes</p>
                </div>
            <div class="subject-buttons">
                <button onclick="showSubjectContent('amharic')">SECTION-E</button>
                <button onclick="showSubjectContent('english')">SECTION-B</button>
                <button onclick="showSubjectContent('physics')">SECTION-A</button>
                
            </div>
        `;
    } else if (subject === 'English') {
        dynamicContent.innerHTML = `
        <a class="arrow" href="teacherprofile.html" ><i class="fa-solid fa-arrow-left"></i></a> 
            <div class="subject-text">
                <h3>${subject} Classes</h3>
                <p>The Listed Class are ${subject} Classes</p>
                </div>
            <div class="subject-buttons">
                <button onclick="showSubjectContent('amharic')">SECTION-B</button>
                <button onclick="showSubjectContent('english')">SECTION-C</button>
                <button onclick="showSubjectContent('physics')">SECTION-D</button>
                
            </div>
        `;
    } else if (subject === 'Physics') {
        dynamicContent.innerHTML = `
        <a class="arrow" href="teacherprofile.html" ><i class="fa-solid fa-arrow-left"></i></a> 
            <div class="subject-text">
                <h3>${subject} Classes</h3>
                <p>The Listed Class are ${subject} Classes</p>
                </div>
            <div class="subject-buttons">
                <button onclick="showSubjectContent('amharic')">SECTION-K</button>
                <button onclick="showSubjectContent('english')">SECTION-F</button>
                <button onclick="showSubjectContent('physics')">SECTION-G</button>
                
            </div>
        `;
    }
}
