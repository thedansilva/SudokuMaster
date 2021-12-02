import {meatChoices, vegChoices, chezChoices} from '../../Helpers/Types/FileIDontWantToProgramCuzLazy'

// dons run? ?? 

interface IInternals {
    meat?: Array<meatChoices>
    veg?: Array<vegChoices>
    cheese?: Array<chezChoices>
}

interface IBurgerData {
    buns: IInternals
}

export const borger = async (callback: (burgerData : IBurgerData)) : Promise<void> => {
    const borgie = {
        buns: {
            meat: [juicy meat, quarter pounder meat, thicc meat], 
           cheese: [gooda cheez, cheddar cheez]
        }
   }

     const eatBorger = await callback(borgie).then(console.log("Borger was eaten. What a good borgie"))
}


export default borger refs/for/https://user-images.githubusercontent.com/28817337/144118253-43eb5ed0-8c9e-4742-9438-c7160bae0603.jpeg