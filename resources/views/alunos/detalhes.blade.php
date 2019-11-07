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
                    <button class="btn btn-primary" onclick="editarMatricula({{ $aluno->id }})">
                        <i class="fas fa-check"></i>
                    </button>
                    @csrf
                </div>
            </div>
        </td> 
        <td> <button class="btn btn-info btn-sm mtr=l"  onclick="toggleInputMatricula({{$aluno->id}})">
                <i class="fas fa-edit"></i>
            </button>
        </td>
    </tr>

    <tr>
    <th style="text-align:center">Nome:</th> 
        <td>    <span id="nome-aluno-{{ $aluno->id }}">{{ $aluno->nome }}</span>

            <div class="input-group w-50" hidden id="input-nome-aluno-{{ $aluno->id }}">
                <input type="text" class="form-control" value="{{ $aluno->nome }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" onclick="editarNome({{ $aluno->id }})">
                        <i class="fas fa-check"></i>
                    </button>
                    @csrf
                </div>
            </div>
        </td> 
        <td> <button class="btn btn-info btn-sm mtr=l"  onclick="toggleInputNome({{$aluno->id}})">
                <i class="fas fa-edit"></i>
            </button>
        </td>
    </tr>

    <tr>
    <th style="text-align:center">CPF:</th> 
        <td>    <span id="cpf-aluno-{{ $aluno->id }}">{{ $aluno->cpf }}</span>

            <div class="input-group w-50" hidden id="input-cpf-aluno-{{ $aluno->id }}">
                <input type="text" class="form-control" value="{{ $aluno->cpf }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" onclick="editarCpf({{ $aluno->id }})">
                        <i class="fas fa-check"></i>
                    </button>
                    @csrf
                </div>
            </div>
        </td> 
        <td> <button class="btn btn-info btn-sm mtr=l"  onclick="toggleInputCpf({{$aluno->id}})">
                <i class="fas fa-edit"></i>
            </button>
        </td>
    </tr>

    <tr>
    <th style="text-align:center">Endereço:</th> 
        <td>    <span id="endereco-aluno-{{ $aluno->id }}">{{ $aluno->endereco }}</span>

            <div class="input-group w-50" hidden id="input-endereco-aluno-{{ $aluno->id }}">
                <input type="text" class="form-control" value="{{ $aluno->endereco }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" onclick="editarEndereco({{ $aluno->id }})">
                        <i class="fas fa-check"></i>
                    </button>
                    @csrf
                </div>
            </div>
        </td> 
        <td> <button class="btn btn-info btn-sm mtr=l"  onclick="toggleInputEndereco({{$aluno->id}})">
                <i class="fas fa-edit"></i>
            </button>
        </td>
    </tr>

    <tr>
    <th style="text-align:center">Telefone:</th> 
        <td>    <span id="telefone-aluno-{{ $aluno->id }}">{{ $aluno->telefone }}</span>

            <div class="input-group w-50" hidden id="input-telefone-aluno-{{ $aluno->id }}">
                <input type="text" class="form-control" value="{{ $aluno->telefone }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" onclick="editarTelefone({{ $aluno->id }})">
                        <i class="fas fa-check"></i>
                    </button>
                    @csrf
                </div>
            </div>
        </td> 
        <td> <button class="btn btn-info btn-sm mtr=l"  onclick="toggleInputTelefone({{$aluno->id}})">
                <i class="fas fa-edit"></i>
            </button>
        </td>
    </tr>

    <tr>
    <th style="text-align:center">Curso:</th> 
        <td>    <span id="curso-aluno-{{ $aluno->id }}">{{ $aluno->cod_curso }}</span>

            <div class="input-group w-50" hidden id="input-curso-aluno-{{ $aluno->id }}">
                <input type="text" class="form-control" value="{{ $aluno->cod_curso }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" onclick="editarCurso({{ $aluno->id }})">
                        <i class="fas fa-check"></i>
                    </button>
                    @csrf
                </div>
            </div>
        </td> 
        <td> <button class="btn btn-info btn-sm mtr=l"  onclick="toggleInputCurso({{$aluno->id}})">
                <i class="fas fa-edit"></i>
            </button>
        </td>
    </tr>

    <tr>
    <th style="text-align:center">Ciclo:</th> 
        <td>    <span id="ciclo-aluno-{{ $aluno->id }}">{{ $aluno->ciclo }}</span>

            <div class="input-group w-50" hidden id="input-ciclo-aluno-{{ $aluno->id }}">
                <input type="text" class="form-control" value="{{ $aluno->ciclo }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" onclick="editarCiclo({{ $aluno->id }})">
                        <i class="fas fa-check"></i>
                    </button>
                    @csrf
                </div>
            </div>
        </td> 
        <td> <button class="btn btn-info btn-sm mtr=l"  onclick="toggleInputCiclo({{$aluno->id}})">
                <i class="fas fa-edit"></i>
            </button>
        </td>
    </tr>

    </table>
    
    </li>
    @endforeach
    </ul>

    <script>
    
    
    function toggleInputMatricula(alunoId) {
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

function editarMatricula(alunoId) {
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
        document.getElementById(`matricula-aluno-${alunoId}`).textContent = matricula;
    });
}

//EDITAR NOME

function toggleInputNome(alunoId) {
            const nomeAlunoEl = document.getElementById(`nome-aluno-${alunoId}`);
            const inputAlunoEl = document.getElementById(`input-nome-aluno-${alunoId}`);
            if (nomeAlunoEl.hasAttribute('hidden')) {
                nomeAlunoEl.removeAttribute('hidden');
                inputAlunoEl.hidden = true;
            } else {
                inputAlunoEl.removeAttribute('hidden');
                nomeAlunoEl.hidden = true;
            }
        }

function editarNome(alunoId) {
    let formData = new FormData();
    const nome = document
        .querySelector(`#input-nome-aluno-${alunoId} > input`)
        .value;
       
    const token = document
        .querySelector(`input[name="_token"]`)
        .value;
      
    formData.append('nome', nome);
    formData.append('_token', token);
    const url = `/alunos/${alunoId}/editaNome`;
    fetch(url, {
        method: 'POST',
        body: formData
    }).then(() => {
        toggleInputNome(alunoId);
        document.getElementById(`nome-aluno-${alunoId}`).textContent = nome;
    });
}



//EDITAR CPF

function toggleInputCpf(alunoId) {
            const cpfAlunoEl = document.getElementById(`cpf-aluno-${alunoId}`);
            const inputAlunoEl = document.getElementById(`input-cpf-aluno-${alunoId}`);
            if (cpfAlunoEl.hasAttribute('hidden')) {
                cpfAlunoEl.removeAttribute('hidden');
                inputAlunoEl.hidden = true;
            } else {
                inputAlunoEl.removeAttribute('hidden');
                cpfAlunoEl.hidden = true;
            }
        }

function editarCpf(alunoId) {
    let formData = new FormData();
    const cpf = document
        .querySelector(`#input-cpf-aluno-${alunoId} > input`)
        .value;
       
    const token = document
        .querySelector(`input[name="_token"]`)
        .value;
      
    formData.append('cpf', cpf);
    formData.append('_token', token);
    const url = `/alunos/${alunoId}/editaCpf`;
    fetch(url, {
        method: 'POST',
        body: formData
    }).then(() => {
        toggleInputCpf(alunoId);
        document.getElementById(`cpf-aluno-${alunoId}`).textContent = cpf;
    });
}


 //EDITAR ENDEREÇO

 function toggleInputEndereco(alunoId) {
            const enderecoAlunoEl = document.getElementById(`endereco-aluno-${alunoId}`);
            const inputAlunoEl = document.getElementById(`input-endereco-aluno-${alunoId}`);
            if (enderecoAlunoEl.hasAttribute('hidden')) {
                enderecoAlunoEl.removeAttribute('hidden');
                inputAlunoEl.hidden = true;
            } else {
                inputAlunoEl.removeAttribute('hidden');
                enderecoAlunoEl.hidden = true;
            }
        }

function editarEndereco(alunoId) {
    let formData = new FormData();
    const endereco = document
        .querySelector(`#input-endereco-aluno-${alunoId} > input`)
        .value;
       
    const token = document
        .querySelector(`input[name="_token"]`)
        .value;
      
    formData.append('endereco', endereco);
    formData.append('_token', token);
    const url = `/alunos/${alunoId}/editaEndereco`;
    fetch(url, {
        method: 'POST',
        body: formData
    }).then(() => {
        toggleInputEndereco(alunoId);
        document.getElementById(`endereco-aluno-${alunoId}`).textContent = endereco;
    });
}


 //EDITAR TELEFONE

 function toggleInputTelefone(alunoId) {
            const telefoneAlunoEl = document.getElementById(`telefone-aluno-${alunoId}`);
            const inputAlunoEl = document.getElementById(`input-telefone-aluno-${alunoId}`);
            if (telefoneAlunoEl.hasAttribute('hidden')) {
                telefoneAlunoEl.removeAttribute('hidden');
                inputAlunoEl.hidden = true;
            } else {
                inputAlunoEl.removeAttribute('hidden');
                telefoneAlunoEl.hidden = true;
            }
        }

function editarTelefone(alunoId) {
    let formData = new FormData();
    const telefone = document
        .querySelector(`#input-telefone-aluno-${alunoId} > input`)
        .value;
       
    const token = document
        .querySelector(`input[name="_token"]`)
        .value;
      
    formData.append('telefone', telefone);
    formData.append('_token', token);
    const url = `/alunos/${alunoId}/editaTelefone`;
    fetch(url, {
        method: 'POST',
        body: formData
    }).then(() => {
        toggleInputTelefone(alunoId);
        document.getElementById(`telefone-aluno-${alunoId}`).textContent = telefone;
    });
}



//EDITAR CURSO

function toggleInputCurso(alunoId) {
            const cursoAlunoEl = document.getElementById(`curso-aluno-${alunoId}`);
            const inputAlunoEl = document.getElementById(`input-curso-aluno-${alunoId}`);
            if (cursoAlunoEl.hasAttribute('hidden')) {
                cursoAlunoEl.removeAttribute('hidden');
                inputAlunoEl.hidden = true;
            } else {
                inputAlunoEl.removeAttribute('hidden');
                cursoAlunoEl.hidden = true;
            }
        }

function editarCurso(alunoId) {
    let formData = new FormData();
    const curso = document
        .querySelector(`#input-curso-aluno-${alunoId} > input`)
        .value;
       
    const token = document
        .querySelector(`input[name="_token"]`)
        .value;
      
    formData.append('curso', curso);
    formData.append('_token', token);
    const url = `/alunos/${alunoId}/editaCurso`;
    fetch(url, {
        method: 'POST',
        body: formData
    }).then(() => {
        toggleInputCurso(alunoId);
        document.getElementById(`curso-aluno-${alunoId}`).textContent = curso;
    });
}



//EDITAR CICLO

function toggleInputCiclo(alunoId) {
            const cicloAlunoEl = document.getElementById(`ciclo-aluno-${alunoId}`);
            const inputAlunoEl = document.getElementById(`input-ciclo-aluno-${alunoId}`);
            if (cicloAlunoEl.hasAttribute('hidden')) {
                cicloAlunoEl.removeAttribute('hidden');
                inputAlunoEl.hidden = true;
            } else {
                inputAlunoEl.removeAttribute('hidden');
                cicloAlunoEl.hidden = true;
            }
        }

function editarCiclo(alunoId) {
    let formData = new FormData();
    const ciclo = document
        .querySelector(`#input-ciclo-aluno-${alunoId} > input`)
        .value;
       
    const token = document
        .querySelector(`input[name="_token"]`)
        .value;
      
    formData.append('ciclo', ciclo);
    formData.append('_token', token);
    const url = `/alunos/${alunoId}/editaCiclo`;
    fetch(url, {
        method: 'POST',
        body: formData
    }).then(() => {
        toggleInputCiclo(alunoId);
        document.getElementById(`ciclo-aluno-${alunoId}`).textContent = ciclo;
    });
}
    

    </script>

@endsection