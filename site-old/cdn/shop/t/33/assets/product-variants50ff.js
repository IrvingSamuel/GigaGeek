function clear_variants(clear_object){clear_object.forEach(item=>{item.title=item.title.replace('"',"_double_quote"),item.public_title!=null&&(item.public_title=item.public_title.replace('"',"_double_quote")),item.name=item.name.replace('"',"_double_quote"),item.option1&&(item.option1=item.option1.replace('"',"_double_quote")),item.option2&&(item.option2=item.option2.replace('"',"_double_quote")),item.option3&&(item.option3=item.option3.replace('"',"_double_quote"));for(let i=0;i<item.options.length;i++)item.options[i]=item.options[i].replace('"',"_double_quote")})}$(document).ready(function(){if($(".product-json").length>0){let product=$(".product-json").data("json-product");clear_variants(product.variants);let defaultVariantId=product.default_variant_id,productElem=$(".product-single");Product.updateOptions(product,defaultVariantId,productElem,setInfo),setInfo(product,defaultVariantId,productElem)}function setInfo(product,variantId,selector){let variant=product.variants.filter(item=>item.id===+variantId)[0],quantityArray=product.quantity.filter(item=>item.id===variantId),variantCount=quantityArray.length?parseInt(quantityArray[0].quantity):0;Product.updateProgressBar(product,variantCount),Product.updatePrice(product,variantId,selector),Product.updateShortInfo(variant,variantCount,selector),Product.updateAddButton(variantCount,selector),Product.updatePhotoProduct(variant)}});
//# sourceMappingURL=/cdn/shop/t/33/assets/product-variants.js.map?v=74031314747593042911654588407
