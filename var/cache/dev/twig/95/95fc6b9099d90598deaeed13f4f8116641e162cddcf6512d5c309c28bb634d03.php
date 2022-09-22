<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_1896c7782fde5e66da02fc77b2c64be55c74012059b2a0191f598089da186973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ac10423fed0a95945b41fac7dd410f9e610f80d5b333d7c44bc96145877ed60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac10423fed0a95945b41fac7dd410f9e610f80d5b333d7c44bc96145877ed60->enter($__internal_8ac10423fed0a95945b41fac7dd410f9e610f80d5b333d7c44bc96145877ed60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_8d4cd592da3b7059d8dfd3809bf8d9a74e50081ac7d323055a48fcfdd535cc52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4cd592da3b7059d8dfd3809bf8d9a74e50081ac7d323055a48fcfdd535cc52->enter($__internal_8d4cd592da3b7059d8dfd3809bf8d9a74e50081ac7d323055a48fcfdd535cc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_8ac10423fed0a95945b41fac7dd410f9e610f80d5b333d7c44bc96145877ed60->leave($__internal_8ac10423fed0a95945b41fac7dd410f9e610f80d5b333d7c44bc96145877ed60_prof);

        
        $__internal_8d4cd592da3b7059d8dfd3809bf8d9a74e50081ac7d323055a48fcfdd535cc52->leave($__internal_8d4cd592da3b7059d8dfd3809bf8d9a74e50081ac7d323055a48fcfdd535cc52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
