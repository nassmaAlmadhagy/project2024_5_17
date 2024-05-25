const titlesAndIds = [
    {
      //العنوان الرئيسي للقسم
      title: "تقييم الاكاديمي",
      //  القيم التي ستظهر تحت القسم
      values: [
        { title: 'المقررات الدراسية', id: 'Lectures' },
        { title: 'المحاضرات', id: 'TeachingStaff' },
        { title: ' طاقم التدريس', id: 'Courses' },
      ],
    },
    {
      title: "تقييم خدمي",
      values: [
        { title: 'الامن', id:'security_services'},
        { title: 'الاستجابه لاحتياجات الطلاب', id: 'responding-students' },
        { title: 'تنسيق نزولات ميدانيه للتدريب', id: 'coordinating-field-trips-training' },
        { title: 'تاهيل الطلاب لسوق العمل', id: 'preparing-students-labor-market' },
      ],
    },
    {
      //العنوان الرئيسي للقسم
      title: "تقييم مالي",
      //  القيم التي ستظهر تحت القسم
      values: [
        { title: 'الرسوم$', id: 'inancialcharges' },
        
      ],
    },
    {
      title: "تقييم الانشطه",
      values: [
        { title: 'الرحلات', id: 'trips' },
              { title: 'المسابقات', id: 'contests' },
              { title: 'الفعاليات', id: 'Events' },
              { title: 'اشراك الطلاب في نشاطات', id: 'studient_activities' },
  
  
      ],
    }
  ];



    

function createRatingSection(title, values, starsId, includeComment = true) {
  //  تعليق: إنشاء القسم الرئيسي
  const sectionDiv = document.createElement("div");
  sectionDiv.classList = "rating-section";
  // تعليق: إنشاء عنوان  القسم الرئيسي
  const sectionTitle = document.createElement("h3");
  sectionTitle.classList = "section-title";
  sectionTitle.append(title);
  sectionDiv.append(sectionTitle);
  for (const value of values) {
    // تعليق: إنشاء قسم التقييم
    const ratingSection = document.createElement("div");
    ratingSection.className = "rating";

    // تعليق: إنشاء عنصر التقييم
    const ratingItem = document.createElement("div");
    ratingItem.className = "rating-item";

    // تعليق: إنشاء عنصر العنوان
    const titleDiv = document.createElement("div");
    titleDiv.classList = "rating-title";
    const titleSpan = document.createElement("span");

    titleSpan.textContent = value.title;
    titleDiv.appendChild(titleSpan);
    // تعليق: إنشاء عنصر النجوم
    const starsDiv = document.createElement("div");
    starsDiv.id = value.id;
    for (let i = 1; i <= 5; i++) {
      const star = document.createElement("span");
      star.className = "fa-solid fa-star star";
      star.dataset.value = i;
      starsDiv.appendChild(star);
    }

    // تعليق: إنشاء حاوية الوصف

    // تعليق: إنشاء نص للحاوية
    const inputGroupText = document.createElement("span");

    inputGroupText.className = "input-group-text";
    inputGroupText.id = "inputGroup-sizing-sm";
    inputGroupText.textContent = "نشر";
    if (includeComment) {
      ratingItem.appendChild(titleDiv);
      ratingItem.appendChild(starsDiv);
      ratingSection.appendChild(ratingItem);
      sectionDiv.appendChild(ratingItem);
    }
  }
  return sectionDiv;
}

const ratingsContainer = document.getElementById("ratings-container");

titlesAndIds.forEach(({ title, values }) => {
  const ratingSection = createRatingSection(title, values);
  ratingsContainer.appendChild(ratingSection);
});

function setRating(ratingContainer, rating) {
  const stars = ratingContainer.querySelectorAll(".star");
  for (let i = 0; i < stars.length; i++) {
    if (i < rating) {
      stars[i].classList.add("active");
    } else {
      stars[i].classList.remove("active");
    }
  }
}

function handleRatingClick(event) {
  const selectedStar = event.target;
  const ratingContainer = selectedStar.parentNode;
  const rating = parseInt(selectedStar.getAttribute("data-value"));

  setRating(ratingContainer, rating);
}

document.body.addEventListener("click", handleRatingClick, true);
document.body.addEventListener("mouseover", handleRatingHover, true);
