<?php

namespace App\Http\Controllers;
use App\Models\Student; // Importa el modelo Student
use Illuminate\Support\Facades\Validator; // Importa la clase Validator para validar datos
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index()
    {

        $students = Student::all(); // Obtiene todos los estudiantes de la base de datos

        if ($students->isEmpty()) {
           $data = [
                'message' => 'No hay estudiantes registrados.',
                'students' => [],
                'status' => 404
            ];
            return response()->json($data, 404); // Devuelve un mensaje de error si no hay estudiantes
        }

        return response()->json($students, 200); // Devuelve la lista de estudiantes en formato JSON
    }

    public function store(Request $request) // Esta función se encarga de crear un nuevo estudiante, toma un objeto request como parámetro
    {                                       // Y lo almacena en la variable $request

    $validator = Validator::make($request->all(),[
        'name'=>'required',
        'email'=>'required|email',
        'phone'=>'required',
        'birth_date'=>'required|date',
    ]);

    if ($validator->fails()){
        $data = [
            'message' => 'Error de validación',
            'errors' => $validator->errors(),
            'status' => 400
        ];
        return response()->json($data, 400); // Devuelve un mensaje de error si la validación falla
    }

    $student = Student::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'birth_date' => $request->birth_date,
    ]);

    if (!$student) {
        $data = [
            'message' => 'Error al crear el estudiante',
            'status' => 500
        ];
        return response()->json($data, 500); // Devuelve un mensaje de error si la creación falla
    }

    $data = [
        'message' => 'Estudiante creado exitosamente',
        'student' => $student,
        'status' => 201
    ];

    return response()->json($data, 201); // Devuelve un mensaje de éxito si la creación es exitosa


}
 public function show($id)
    {
        $student = Student::find($id); // Busca un estudiante por su ID

        if (!$student) {
            $data = [
                'message' => 'Estudiante no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404); // Devuelve un mensaje de error si el estudiante no se encuentra
        }
        $data = [
            'message' => 'Estudiante encontrado',
            'student' => $student,
            'status' => 200
        ];
        return response()->json($student, 200); // Devuelve el estudiante en formato JSON
    }

    public function delete($id)
    {
        $student = Student::find($id); // Busca un estudiante por su ID

        if (!$student) {
            $data = [
                'message' => 'Estudiante no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404); // Devuelve un mensaje de error si el estudiante no se encuentra
        }

        $student->delete(); // Elimina el estudiante

        $data = [
            'message' => 'Estudiante eliminado exitosamente',
            'status' => 200
        ];
        return response()->json($data, 200); // Devuelve un mensaje de éxito si la eliminación es exitosa
    }
    public function update(Request $request, $id)
    {
        $student = Student::find($id); // Busca un estudiante por su ID

        if (!$student) {
            $data = [
                'message' => 'Estudiante no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404); // Devuelve un mensaje de error si el estudiante no se encuentra
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'birth_date' => 'required|date',
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error de validación',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400); // Devuelve un mensaje de error si la validación falla
        }

        $student->name = $request->name; // Actualiza el nombre del estudiante
        $student->email = $request->email; // Actualiza el correo electrónico del estudiante
        $student->phone = $request->phone; // Actualiza el teléfono del estudiante
        $student->birth_date = $request->birth_date; // Actualiza la fecha de nacimiento del estudiante
        $student->save(); // Guarda los cambios en la base de datos



        $data = [
            'message' => 'Estudiante actualizado exitosamente',
            'student' => $student,
            'status' => 200
        ];

        return response()->json($data, 200); // Devuelve un mensaje de éxito si la actualización es exitosa
    }
    public function patchy(Request $request, $id)
    {
        $student = Student::find($id); // Busca un estudiante por su ID

        if (!$student) {
            $data = [
                'message' => 'Estudiante no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404); // Devuelve un mensaje de error si el estudiante no se encuentra
        }

        $validator = Validator::make($request->all(), [ //Validación de datos, la clave está en que siendo un patch
            //no se requiere que todos los campos sean obligatorios, por eso se usa 'sometimes'
            'name' => 'sometimes',
            'email' => 'sometimes|email',
            'phone' => 'sometimes',
            'birth_date' => 'sometimes',
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error de validación',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400); // Devuelve un mensaje de error si la validación falla
        }

        if ($request->has('name')) { //Si el request tiene el campo name
            $student->name = $request->name; // Actualiza el nombre del estudiante
        }
        if ($request->has('email')) { //Si el request tiene el campo email
            $student->email = $request->email; // Actualiza el correo electrónico del estudiante
        }
        if ($request->has('phone')) { //Si el request tiene el campo phone
            $student->phone = $request->phone; // Actualiza el teléfono del estudiante
        }
        if ($request->has('birth_date')) { //Si el request tiene el campo birth_date
            $student->birth_date = $request->birth_date; // Actualiza la fecha de nacimiento del estudiante
        }
        $student->save(); // Guarda los cambios en la base de datos

        $data = [
            'message' => 'Estudiante actualizado parcialmente exitosamente',
            'student' => $student,
            'status' => 200
        ];

        return response()->json($data, 200); // Devuelve un mensaje de éxito si la actualización es exitosa
    }
}
