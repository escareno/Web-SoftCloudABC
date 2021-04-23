import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './modules/commun/components/home/home.component';
import { CoursesComponent } from './modules/courses/components/courses/courses.component';
import { LoginComponent } from './modules/authen/components/login/login.component';
import { AboutComponent } from './modules/commun/components/about/about.component';


const routes: Routes = [
 
  {
    path:'',
    component:HomeComponent
  },
  {
    path:'courses',
    component:CoursesComponent
  },
  {
    path:'login',
    component:LoginComponent
  },
  {
    path:'about',
    component:AboutComponent
  }

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
