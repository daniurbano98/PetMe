import { Component } from '@angular/core';
import { disableDebugTools } from '@angular/platform-browser';
//importo el archivo JSON
import listadedatos from 'src/assets/app_data/app_info.json';


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'PetMe Project';
  img= "petme.jpg";
 
  

  //Exporto los datos del JSON a la vista - Array que contendrá los datos del about us
  datos  = [listadedatos];
}
