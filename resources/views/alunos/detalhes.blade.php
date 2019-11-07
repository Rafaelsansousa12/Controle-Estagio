@extends('layout')

@section('cabecalho') 

    Controle Estágio
@endsection


@section('conteudo')

        <h3>Dados do Aluno</h3><br> 
    
    
    <ul class="list-group"> 
    @foreach ($alunos as $aluno)  
    <li class="list-group-item d-flex  justify-content-between align-items-center">
    
    <table>
    <tr>
    <th style="text-align:center">Matricula:</th> 
        <td>    <span id="matricula-aluno-{{ $aluno->id }}">{{ $aluno->matricula }}</span>

            <div class="input-group w-50" hidden id="input-matricula-aluno-{{ $aluno->id }}">
                <input type="text" class="form-control" value="{{ $aluno->matricula }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" onclick="editarAluno({{ $aluno->id }})">
                        <i class="fas fa-check"></i>
                    </button>
                    @csrf
                </div>
            </div>
        </td> 
        <td> <button class="btn btn-info btn-sm mtr=l"  onclick="toggleInput({{$aluno->id}})">
                <i class="fas fa-edit"></i>
            </button>
        </td>
    </tr>

    <tr>
    <th>Nome:</th>
    <td>{{ $aluno->nome }}</td>
    </tr>

    <tr>
    <th>CPF:</th>
    <td>{{ $aluno->cpf }}</td>
    </tr>

    <tr>
    <th>Endereco:</th>
    <td>{{ $aluno->endereco }}</td>
    </tr>

    <tr>
    <th>Telefone:</th>
    <td>{{ $aluno->telefone }}</td>
    </tr>

    <tr>
    <th>Curso:</th>
    <td>{{ $aluno->cod_curso }}</td>
    </tr>

    <tr>
    <th>Ciclo:</th>
    <td>{{ $aluno->ciclo }}</td>
    </tr>

    </table>
    
    </li>
    @endforeach
    </ul>

    <script>
        function toggleInput(alunoId) {
                const matriculaAlunoEl = document.getElementById(`matricula-aluno-${alunoId}`);
                const inputAlunoEl = document.getElementById(`input-matricula-aluno-${alunoId}`);
                if (matriculaAlunoEl.hasAttribute('hidden')) {
                    matriculaAlunoEl.removeAttribute('hidden');
                    inputAlunoEl.hidden = true;
                } else {
                    inputAlunoEl.removeAttribute('hidden');
                    matriculaAlunoEl.hidden = true;
                }
            }

    function editarAluno(alunoId) {
        let formData = new FormData();
        const matricula = document
            .querySelector(`#input-matricula-aluno-${alunoId} > input`)
            .value;
           
        const token = document
            .querySelector(`input[name="_token"]`)
            .value;
        formData.append('matricula', matricula);
        formData.append('_token', token);
        const url = `/alunos/${alunoId}/editaMatricula`;
        fetch(url, {
            method: 'POST',
            body: formData
        }).then(() => {
            toggleInput(alunoId);
            document.getElementById(`nome-aluno-${alunoId}`).textContent = matricula;
        });
    }
</script>    

@endsection