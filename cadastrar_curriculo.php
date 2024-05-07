<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Formulário de Currículo</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <style>
         body {
         padding: 20px;
         display: flex;
         justify-content: center;
         align-items: center;
         min-height: 100vh;
         background: #f8f9fa;
         }
         .container {
         width: 100%;
         max-width: 500px;
         }
         .form-group {
         display: none;
         }
         .form-control{
         margin-bottom: 10px;    
         }
         .form-group.active {
         display: block;
         }
         .btn-group {
         margin-top: 20px;
         }
         .experience-group {
         margin-bottom: 20px
         }
         .experience-group .experience {
         margin-bottom: 10px;
         }
         .experience-group .experience:last-child {
         margin-bottom: 0;
         }
         .address-group,
         .city-state-group {
         display: flex;
         justify-content: space-between;
         }
         .address-group #address,
         .city-state-group #city {
         flex: 2;
         margin-right: 10px;
         }
         .address-group #number,
         .address-group #district,
         .city-state-group #state {
         flex: 1;
         }
         .skill-tag {
    display: inline-block;
    padding: 5px 10px;
    margin: 5px;
    border: 1px solid #007bff;
    border-radius: 5px;
    background-color: #fff;
    color: #007bff;
    cursor: pointer;
    transition: all 0.3s ease;
}

.skill-tag.selected {
    background-color: #007bff;
    color: #fff;
}

      </style>
   </head>
   <body>
      <div class="container">
         <h2 class="mt-4">Formulário de Currículo</h2>
         <form id="resumeForm" action="processa_curriculo.php" method="post">
            <div class="form-group active">
               <label for="fullName">Nome Completo:</label>
               <input type="text" class="form-control" id="fullName" name="fullName" required>
               <div class="btn-group" style="margin-top: 20px;">
                  <button class="btn btn-primary next">Avançar</button>
               </div>
            </div>
            <div class="form-group">
               <label for="phone">Telefone:</label>
               <input type="tel" class="form-control" id="phone" name="phone" required>
               <div class="btn-group" style="margin-top: 20px;">
                  <button class="btn btn-secondary back">Voltar</button>
                  <button class="btn btn-primary next">Avançar</button>
               </div>
            </div>
            <div class="form-group">
               <label for="email">Email:</label>
               <input type="email" class="form-control" id="email" name="email" required>
               <div class="btn-group" style="margin-top: 20px;">
                  <button class="btn btn-secondary back">Voltar</button>
                  <button class="btn btn-primary next">Avançar</button>
               </div>
            </div>
            <div class="form-group">
               <label for="address">Endereço/Número/Bairro:</label>
               <div class="address-group">
                  <input type="text" class="form-control" id="address" name="address" placeholder="Endereço" required>
                  <input type="text" class="form-control" id="number" name="number" placeholder="Número" required>
                  <input type="text" class="form-control" id="district" name="district" placeholder="Bairro" required>
               </div>
               <div class="btn-group" style="margin-top: 20px;">
                  <button class="btn btn-secondary back">Voltar</button>
                  <button class="btn btn-primary next">Avançar</button>
               </div>
            </div>
            <div class="form-group">
               <label for="cityState">Cidade e Estado:</label>
               <div class="city-state-group">
                  <select class="form-control" id="state" name="state" required></select>
                  <select class="form-control" id="city" name="city" required></select>
               </div>
               <div class="btn-group" style="margin-top: 20px;">
                  <button class="btn btn-secondary back">Voltar</button>
                  <button class="btn btn-primary next">Avançar</button>
               </div>
            </div>
            <div class="form-group">
               <label for="experience">Experiência:</label>
               <div id="experienceGroup">
                  <div class="experience">
                     <input type="text" class="form-control" id="companyName" name="companyName[]" placeholder="Nome da empresa" required>
                     <input type="text" class="form-control" id="position" name="position[]" placeholder="Cargo ocupado" required>
                     <input type="text" class="form-control" id="department" name="department[]" placeholder="Setor" required>
                     <input type="text" class="form-control date" id="startDate" name="startDate[]" placeholder="Data de início (MM/YYYY)" required>
                     <input type="text" class="form-control date" id="endDate" name="endDate[]" placeholder="Data de saída (MM/YYYY)" required>
                     <textarea class="form-control" id="jobDescription" name="jobDescription[]" rows="3" placeholder="Descrição das atividades" required></textarea>
                  </div>
               </div>
               <div class="btn-group" style="margin-top: 20px;">
                  <button class="btn btn-success" id="addExperience" style="margin-right: 10px;">Adicionar Nova Experiência</button>
                  <button class="btn btn-secondary back">Voltar</button>
                  <button class="btn btn-primary next">Avançar</button>
               </div>
            </div>
            <div class="form-group">
               <label for="education">Formação Acadêmica:</label>
               <div id="educationGroup">
                  <div class="education">
                     <input type="text" class="form-control" id="course" name="course[]" placeholder="Nome do curso" required>
                     <input type="text" class="form-control" id="university" name="university[]" placeholder="Nome da universidade" required>
                     <input type="text" class="form-control" id="completionYear" name="completionYear[]" placeholder="Ano de conclusão (YYYY)" required>
                  </div>
               </div>
               <div class="btn-group" style="margin-top: 20px;">
                  <button class="btn btn-success" id="addEducation" style="margin-right: 10px;">Adicionar Nova Formação</button>
                  <button class="btn btn-secondary back">Voltar</button>
                  <button class="btn btn-primary next">Avançar</button>
               </div>
            </div>
            <div class="form-group">
    <label for="courses">Cursos:</label>
    <div id="courseGroup">
        <div class="course">
            <input type="text" class="form-control" id="institutionName" name="institutionName[]" placeholder="Nome da instituição" required>
            <input type="text" class="form-control" id="courseName" name="courseName[]" placeholder="Nome do curso" required>
            <input type="text" class="form-control" id="courseHours" name="courseHours[]" placeholder="Carga horária" required>
        </div>
    </div>
    <div class="btn-group" style="margin-top: 20px;">
        <button class="btn btn-success" id="addCourse" style="margin-right: 10px;">Adicionar Novo Curso</button>
        <button class="btn btn-secondary back">Voltar</button>
        <button class="btn btn-primary next">Avançar</button>
    </div>
            </div>
            <div class="form-group">
    <label for="skills">Habilidades:</label>
    <textarea class="form-control" id="skills" name="skills[]" rows="3" required style="display: none;"></textarea>
    <div id="suggestedSkills">
        <h3>Habilidades sugeridas:</h3>
        <div class="skill-tags">
            <span class="skill-tag">Comunicação</span>
            <span class="skill-tag">Trabalho em Equipe</span>
            <span class="skill-tag">Resolução de Problemas</span>
            <span class="skill-tag">Pensamento crítico</span>
            <span class="skill-tag">Flexibilidade</span>
            <span class="skill-tag">Gestão do tempo</span>
            <span class="skill-tag">Ética de trabalho</span>
            <span class="skill-tag">Criatividade</span>
            <span class="skill-tag">Inteligência emocional</span>
            <span class="skill-tag">Liderança</span>
        </div>
        <input type="text" class="form-control" id="newSkill" placeholder="Digite uma nova habilidade" required style="margin-top: 10px;">
        <button class="btn btn-success" id="addNewSkill" style="margin-top: 10px;">Adicionar Nova Habilidade</button>
    </div>
    <div class="btn-group" style="margin-top: 20px;">
        <button class="btn btn-secondary back">Voltar</button>
        <button class="btn btn-primary next">Avançar</button>
    </div>
    <button type="submit" class="btn btn-success">Gravar</button>
    <button id="previewButton" class="btn btn-primary">Pré-visualizar Currículo</button>

</div>




         </form>
         <div id="resumeDisplay"></div>

      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
      <script>
        $(document).ready(function(){
    $('#phone').mask('(00) 00000-0000');
    $('.date').mask('00/0000');

     // Função para adicionar botão de remover
     function addRemoveButton(parent) {
        var removeButton = $('<button class="btn btn-danger remove">Remover</button>');
        removeButton.click(function(e) {
            e.preventDefault();
            $(this).parent().remove();
        });
        parent.append(removeButton);
    }

     // Função para adicionar botão de remover
     function addRemoveButton(parent) {
        var removeButton = $('<button class="btn btn-danger remove">Remover</button>');
        removeButton.click(function(e) {
            e.preventDefault();
            $(this).parent().remove();
        });
        parent.append(removeButton);
    }

    var experienceCount = 1;
    $('#addExperience').click(function(e) {
        e.preventDefault();
        experienceCount++;
        var newExperience = $('.experience').first().clone();
        newExperience.find('input, textarea').val('');
        newExperience.prepend('<h6>Experiência ' + experienceCount + ':</h6>');
        addRemoveButton(newExperience);
        $('#experienceGroup').append(newExperience);
    });

    var educationCount = 1;
    $('#addEducation').click(function(e) {
        e.preventDefault();
        educationCount++;
        var newEducation = $('.education').first().clone();
        newEducation.find('textarea').val('');
        newEducation.prepend('<h6>Formação ' + educationCount + '</h6>');
        addRemoveButton(newEducation);
        $('#educationGroup').append(newEducation);
    });

    var courseCount = 1;
    $('#addCourse').click(function(e) {
        e.preventDefault();
        courseCount++;
        var newCourse = $('.course').first().clone();
        newCourse.find('input').val('');
        newCourse.prepend('<h6>Curso ' + courseCount + '</h6>');
        addRemoveButton(newCourse);
        $('#courseGroup').append(newCourse);
    });


    $(document).on('click', '.skill-tag', function() {
        $(this).toggleClass('selected');
        var skill = $(this).text();
        var skillsInput = $('#skills');
        var currentSkills = skillsInput.val().split(', ');
        if ($(this).hasClass('selected')) {
            currentSkills.push(skill);
        } else {
            var index = currentSkills.indexOf(skill);
            if (index > -1) {
                currentSkills.splice(index, 1);
            }
        }
        skillsInput.val(currentSkills.join(', '));
    });

    $('#addNewSkill').click(function(e) {
        e.preventDefault();
        var newSkill = $('#newSkill').val();
        if (newSkill) {
            $('.skill-tags').append('<span class="skill-tag selected">' + newSkill + '</span>');
            $('#newSkill').val('');
            var skillsInput = $('#skills');
            var currentSkills = skillsInput.val().split(', ');
            currentSkills.push(newSkill);
            skillsInput.val(currentSkills.join(', '));
        }
    });

    $.ajax({
        url: 'https://servicodados.ibge.gov.br/api/v1/localidades/estados',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            data.forEach(function(estado) {
                $('#state').append('<option value="' + estado.sigla + '">' + estado.nome + '</option>');
            });
            $('#state').val('PR').change();
        }
    });

    $('#state').change(function() {
        var estado = $(this).val();

        $.ajax({
            url: 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/' + estado + '/municipios',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#city').empty();
                data.forEach(function(cidade) {
                    $('#city').append('<option value="' + cidade.nome + '">' + cidade.nome + '</option>');
                });
                if (estado === 'PR') {
                    $('#city').val('Paranaguá');
                }
            }
        });
    });

    $('.next').click(function(e){
        e.preventDefault();
        var currentGroup = $(this).closest('.form-group');
        currentGroup.removeClass('active');
        currentGroup.next('.form-group').addClass('active');
    });

    $('.back').click(function(e){
        e.preventDefault();
        var currentGroup = $(this).closest('.form-group');
        currentGroup.removeClass('active');
        currentGroup.prev('.form-group').addClass('active');
    });

    $('#resumeForm').submit(function(e){
        e.preventDefault();
        Swal.fire(
            'Sucesso!',
            'Seu currículo foi enviado com sucesso.',
            'success'
        ).then(function(){
            $('#resumeForm')[0].reset();
        });
    });

    $('input,select').on('keypress', function(e) {
        if (e.which == 13) {
            e.preventDefault();
            $(this).closest('.form-group').find('.next').click();
        }
    });

    $('#previewButton').click(function(e){
        e.preventDefault();
        var fullName = $('#fullName').val();
        var phone = $('#phone').val();
        var email = $('#email').val();
        var address = $('#address').val();
        var number = $('#number').val();
        var district = $('#district').val();
        var state = $('#state').val();
        var city = $('#city').val();

        var resume = `
            <h1>${fullName}</h1>
            <p>Telefone: ${phone}</p>
            <p>Email: ${email}</p>
            <p>Endereço: ${address}, ${number}, ${district}, ${city} - ${state}</p>
            <h2>Experiência</h2>
        `;

        $('.experience').each(function() {
            var companyName = $(this).find('#companyName').val();
            var position = $(this).find('#position').val();
            var department = $(this).find('#department').val();
            var startDate = $(this).find('#startDate').val();
            var endDate = $(this).find('#endDate').val();
            var jobDescription = $(this).find('#jobDescription').val();

            resume += `
                <p>Empresa: ${companyName}</p>
                <p>Cargo: ${position}</p>
                <p>Setor: ${department}</p>
                <p>Período: ${startDate} - ${endDate}</p>
                <p>Descrição: ${jobDescription}</p>
            `;
        });

        resume += '<h2>Formação Acadêmica</h2>';
        $('.education').each(function() {
            var course = $(this).find('#course').val();
            var university = $(this).find('#university').val();
            var completionYear = $(this).find('#completionYear').val();

            resume += `
                <p>Curso: ${course}</p>
                <p>Universidade: ${university}</p>
                <p>Ano de Conclusão: ${completionYear}</p>
            `;
        });

        resume += '<h2>Cursos</h2>';
        $('.course').each(function() {
            var institutionName = $(this).find('#institutionName').val();
            var courseName = $(this).find('#courseName').val();
            var courseHours = $(this).find('#courseHours').val();

            resume += `
                <p>Instituição: ${institutionName}</p>
                <p>Curso: ${courseName}</p>
                <p>Carga Horária: ${courseHours}</p>
            `;
        });

        var skills = $('#skills').val();
        resume += `
            <h2>Habilidades</h2>
            <p>${skills}</p>
        `;

        $('#resumeDisplay').html(resume);
    });
});

      </script>
   </body>
</html>