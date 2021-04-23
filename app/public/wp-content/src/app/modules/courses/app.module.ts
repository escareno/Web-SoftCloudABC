import { NgModule } from '@angular/core';
import { CoursesComponent } from './components/courses/courses.component';
import { MaterialModule } from 'src/app/material-ui.module';

@NgModule({
    declarations: [CoursesComponent],
    imports: [
      MaterialModule
    ],
    providers: [],
    bootstrap: []
  })
  export class AppModuleCourses{ }