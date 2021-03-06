import { NgModule } from '@angular/core';
import { MenuTopComponent } from './components/menu-top/menu-top.component';
import { MaterialModule } from 'src/app/material-ui.module';
import { AppRoutingModule } from 'src/app/app-routing.module';

@NgModule({
    declarations: [MenuTopComponent],
    imports: [
      MaterialModule,
      AppRoutingModule
    ],
    exports:[MenuTopComponent],
    providers: [],
    bootstrap: []
  })
  export class AppModuleMenu{ }