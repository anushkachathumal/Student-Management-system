SELECT SUM(sub_val) FROM subject WHERE sub_title IN ( SELECT subjectName FROM subjects WHERE studentId = $studentId );