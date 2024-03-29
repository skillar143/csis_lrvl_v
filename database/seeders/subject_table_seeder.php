<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Subject;
class subject_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Regular Subjects
        $subject = new Subject(["subject_code"=> "GE 105", "subject_description" => "Ethics", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 106", "subject_description" => "The Contemporary World", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 108", "subject_description" => "Understanding the Self", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "PE 102", "subject_description" => "Recreation (Board Games/Indoor Games)", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Relg 2", "subject_description" => "Mariology", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Relg 3", "subject_description" => "Christian Apologetics", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Fil 2", "subject_description" => "Pagbasa at Pagsulat Tungo sa Pananaliksik", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "AssLrng2", "subject_description" => "Assessment in Learning 2", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "TchgMusic", "subject_description" => "Teaching Music in the Elementary Grades", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "TchgEng2", "subject_description" => "Teaching Literacy in the Elementary Grades Through Literature", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "TchgTLE2", "subject_description" => "Edukasyong Pantahanan at Pangkabuhayan with Entrepreneurship", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Relg 5", "subject_description" => "Sacraments", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE Elec", "subject_description" => "Living in the IT Era", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "PE 104", "subject_description" => "Nutrition for Sports and Exercise", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Prac", "subject_description" => "Teaching Internship", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NSTP 2", "subject_description" => "National Service Training Program 2", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 104", "subject_description" => "Understanding the Self (BSN)", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 101", "subject_description" => "Health Assessment", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 102", "subject_description" => "Health Education", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 103", "subject_description" => "Fundamentals of Nursing Practice", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Biochem", "subject_description" => "Biochemistry", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "PE 102*", "subject_description" => "Recreation (Board Games/Indoor Games)*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Fil 2*", "subject_description" => "Pagbasa at Pagsulat Tungo sa Pananaliksik*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 108", "subject_description" => "Health Ethics", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 110", "subject_description" => "Nursing Informatics", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "PE 104*", "subject_description" => "Nutrition for Sports and Exercise*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 114", "subject_description" => "Care of the Older Person/Adult", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 115", "subject_description" => "Nursing Research 2", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Relg 4", "subject_description" => "Theology of the Body", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 121", "subject_description" => "Disaster Nursing", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 106*", "subject_description" => "Ethics*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Relg 2*", "subject_description" => "Mariology*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();

        $subject = new Subject(["subject_code"=> "GE Elec*", "subject_description" => "Living in the IT Era*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 108*", "subject_description" => "The Contemporary World*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 105-", "subject_description" => "Ethics-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 106-", "subject_description" => "The Contemporary World-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Fil 2-", "subject_description" => "Pagbasa at Pagsulat Tungo sa Pananaliksik-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 101", "subject_description" => "Theories of Personality", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Relg 2-", "subject_description" => "Mariology-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "PE 102-", "subject_description" => "Recreation (Board Games/Indoor Games)-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NSTP 2-", "subject_description" => "National Service Training Program 2-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Zoo", "subject_description" => "General Zoology", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Biochem-", "subject_description" => "Biochemistry-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 104", "subject_description" => "Experimental Psychology", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 105", "subject_description" => "Social Psychology", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "PE 104-", "subject_description" => "Nutrition for Sports and Exercise-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NSTP 2*", "subject_description" => "National Service Training Program 2*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 107", "subject_description" => "Science Technology and Society", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Ed 102", "subject_description" => "Building and Enhancing New Literacies Across the Curriculum", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Ed 108", "subject_description" => "The Teacher and the Community School Culture and Organizational Leadership", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "TchgPEH", "subject_description" => "Teaching PE and Health in Elementary Grades", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Logic", "subject_description" => "Logic and Critical Thinking", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Rizal*", "subject_description" => "Rizals Life Works and Writings*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 109", "subject_description" => "Care of Mother and Child At-Risk or with Problems (Acute and Chronic)", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 116", "subject_description" => "Care of Clients with Problems in Nutrition and GI Metabolism and Endocrine Perception and Coordination Acute ", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 117", "subject_description" => "Care of Clients with Maladaptive Patterns of Behavior Acute and Chronic", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 120", "subject_description" => "Decent Work Employment and Transcultural Nursing", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 122", "subject_description" => "Intensive Nursing Practicum (Hospital and Community Settings) (408hrs)", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 101", "subject_description" => "Purposive Communication", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 102", "subject_description" => "Mathematics in the Modern World", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 103", "subject_description" => "Readings in Philippine History", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Ed 101", "subject_description" => "The Child and Adolescent Learners and Learning Principles", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "PE 101", "subject_description" => "Laro ng Lahi", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NSTP 1", "subject_description" => "National Service Training Program 1", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Relg 1", "subject_description" => "Pastoral Theology", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Ed 103", "subject_description" => "Technology for Teaching Learning 1", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Ed 104", "subject_description" => "Facilitating Learner-Centered Teaching", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "TchgM1", "subject_description" => "Teaching Math in the Primary Grades", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "TchgSci1", "subject_description" => "Teaching Science in the Elementary Grades (Biology and Chemistry)", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "TchgSS1", "subject_description" => "Teaching Social Studies in the Elementary Grades (Phil History and Govt)", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "TchgFil1", "subject_description" => "Pagtuturo ng Filipino sa Elementarya I - Estruktura at Gamit ng Wikang Filipino", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "ValEd", "subject_description" => "Good Manners and Right Conduct (Edukasyon sa Pagpapakatao)", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "PE 103", "subject_description" => "Swimming", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Ed 107", "subject_description" => "The Teacher and the School Curriculum", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "AssLrng1", "subject_description" => "Assessment of Learning 1", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "MTB-MLE", "subject_description" => "Content and Pedagogy for the Mother-Tongue", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "TchgEng1", "subject_description" => "Teaching English in the Elementary Grades (Language Arts)", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "TchgArts", "subject_description" => "Teaching Arts in the Elementary Grades", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "TchgTLE1", "subject_description" => "Edukasyong Pantahanan at Pangkabuhayan", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "ECE", "subject_description" => "Play and Developmentally Appropriate Practices in Early Childhood Eduaction", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Fil 1", "subject_description" => "Komunikasyon sa Akademikong Filipino", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Relg 4*", "subject_description" => "Theology of the Body*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "FS 1", "subject_description" => "Observations of Teaching-Learning in Actual School Environment", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "FS 2", "subject_description" => "Participation and Teaching Assistanship", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "ResEd", "subject_description" => "Research in Education", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "CSM", "subject_description" => "Canossian Spirituality and Mission", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 104*", "subject_description" => "Art Appreciation*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Ed 105", "subject_description" => "The Teaching Profession", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Ed 106", "subject_description" => "Foundation of Special and Inclusive Education", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "TchgM2", "subject_description" => "Teaching Math in the Intermediate Grades", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "TchgSci2", "subject_description" => "Teaching Science in the Elementary Grades (Physics Earth and Space Science)", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "TchgSS2", "subject_description" => "Teaching Social Studies in the Elementary Grades (Culture and Geography)", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "TchgFil2", "subject_description" => "Pagtuturo ng Filipino sa Elementarya II - Panitikan ng Pilipinas", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "TTL2", "subject_description" => "Technology for Teaching and Learning in the Elementary Grades", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Rizal", "subject_description" => "Rizals Life Works and Writings-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 101*", "subject_description" => "Purposive Communication (Technical Writing Integrated)", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 102*", "subject_description" => "Mathematics in the Modern World (Biostatistics Integrated)", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 103*", "subject_description" => "Readings in Philippine History*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Fil 1*", "subject_description" => "Komunikasyon sa Akademikong Filipino*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 100", "subject_description" => "Theoretical Foundation of Nursing", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "PE 101*", "subject_description" => "Laro ng Lahi*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Relg 1*", "subject_description" => "Pastoral Theology*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NSTP 1*", "subject_description" => "National Service Training Program 1*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 105*", "subject_description" => "Art Appreciation-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Micro/Para", "subject_description" => "Microbilogy and Parasitology", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 105", "subject_description" => "Nutrition and Diet Therapy", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 106", "subject_description" => "Pharmacology", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 107", "subject_description" => "Care of Mother Child Adolescent (Well Clients)", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "PE 103*", "subject_description" => "Swimming*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 107*", "subject_description" => "Science Technology and Society*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 112", "subject_description" => "Care of Clients with Problems in Oxygenation Fluid and Electrolyte Infectious Inflammatory and Immunologic R", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 113", "subject_description" => "Community Health Nursing 2 Population Groups and Community as Clients", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 111", "subject_description" => "Nursing Research 1", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 118", "subject_description" => "Nursing Care of Clients with Life Threatening Conditions/Acutely III/Multi-Organ Problems/High Acuity and Emerg", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 119", "subject_description" => "Nursing Leadership and Management", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Relg 5*", "subject_description" => "Spirituality and Vocation", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "CSM*", "subject_description" => "Canossian Spirituality and Mission*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Ana/Physio", "subject_description" => "Anatomy and Physiology", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NCM 104", "subject_description" => "Community Health Nursing I Individual and Family as Clients", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Relg 3*", "subject_description" => "Christian Apologetics*", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 101-", "subject_description" => "Purposive Communication-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 102-", "subject_description" => "Mathematics in the Modern World-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 103-", "subject_description" => "Readings in Philippine History-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Fil 1-", "subject_description" => "Komunikasyon sa Akademikong Filipino-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 100", "subject_description" => "Introduction to Psychology", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "PE 101-", "subject_description" => "Laro ng Lahi-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "NSTP 1-", "subject_description" => "National Service Training Program 1-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Relg 1-", "subject_description" => "Pastoral Theology-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE Elec-", "subject_description" => "Living in the IT Era-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Chem", "subject_description" => "Inorganic Chemistry", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Bio", "subject_description" => "Cell and Developmental Biology", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 102", "subject_description" => "Psychological Statistics", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 103", "subject_description" => "Developmental Psychology", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "PE 103-", "subject_description" => "Swimming-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 106", "subject_description" => "Field Methods in Psychology", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 107", "subject_description" => "Abnormal Psychology", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 108", "subject_description" => "Industrial/Organizational Psychology", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 109", "subject_description" => "Group Dynamics", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 110", "subject_description" => "Intro to Counselling", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Relg 4-", "subject_description" => "Theology of the Body-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 118", "subject_description" => "Research in Psychology 1", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 119", "subject_description" => "Seminar in Psychology: Recruitment and Selection", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 116", "subject_description" => "Sikolohiyang Pilipino or Filipino Psychology", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "CSM-", "subject_description" => "Canossian Spirituality and Mission-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 112", "subject_description" => "Psychological Assessment", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 113", "subject_description" => "Physiological Psychology", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 114", "subject_description" => "Cognitive Psychology", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 115", "subject_description" => "Intro to Clinical Psychology", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 117", "subject_description" => "Psychology for Exceptional Children", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Relg 5-", "subject_description" => "Spirituality and Vocation-", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Psy 120", "subject_description" => "Research in Psychology II", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "Prac-", "subject_description" => "Practicum in Psychology (150hrs min)", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "GE 104-", "subject_description" => "Art Appreciation", "subject_type"=> "0", "subject_laboratory_status"=>"0"]); $subject->save();


        //RLE Subjects
        $subject = new Subject(["subject_code"=> "RLE 101", "subject_description" => "Related Learning Experience (102hrs)", "subject_type"=> "1", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "RLE 103", "subject_description" => "Related Learning Experience (102hrs)*", "subject_type"=> "1", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "RLE 104 (CHN)", "subject_description" => "Related Learning Experience (102hrs)-", "subject_type"=> "1", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "RLE 107", "subject_description" => "Related Learning Experience (255 hrs)", "subject_type"=> "1", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "RLE 109", "subject_description" => "Related Learning Experience (306hrs)", "subject_type"=> "1", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "RLE 112", "subject_description" => "Related Learning Experience (306hrs)*", "subject_type"=> "1", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "RLE 113 (CHN)", "subject_description" => "Related Learning Experience (51hrs)-", "subject_type"=> "1", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "RLE 114", "subject_description" => "Related Learning Experience (51hrs)", "subject_type"=> "1", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "RLE 116", "subject_description" => "Related Learning Experience (204hrs)", "subject_type"=> "1", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "RLE 117", "subject_description" => "Related Learning Experience (204hrs)*", "subject_type"=> "1", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "RLE 118", "subject_description" => "Related Learning Experience (255 hrs)*", "subject_type"=> "1", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "RLE 119", "subject_description" => "Related Learning Experience (153hrs)", "subject_type"=> "1", "subject_laboratory_status"=>"0"]); $subject->save();
        $subject = new Subject(["subject_code"=> "RLE 121", "subject_description" => "Related Learning Experience (51hrs)*", "subject_type"=> "1", "subject_laboratory_status"=>"0"]); $subject->save();




    }
}
