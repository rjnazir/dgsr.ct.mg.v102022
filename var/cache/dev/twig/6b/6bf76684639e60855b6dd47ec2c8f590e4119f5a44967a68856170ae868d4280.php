<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_92794c558be50bf3178d5169f4abe26a2f2b332be4615cac4d47b7705904ce15 extends Twig_Template
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
        $__internal_25bbc96d20dbe22d526f956fd2ad15c68045e398b71fbd59f35af9ed460297e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25bbc96d20dbe22d526f956fd2ad15c68045e398b71fbd59f35af9ed460297e3->enter($__internal_25bbc96d20dbe22d526f956fd2ad15c68045e398b71fbd59f35af9ed460297e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ef0c10788067c67ade3af3077d7bfa670a3780d853750895f229b017c679c8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0c10788067c67ade3af3077d7bfa670a3780d853750895f229b017c679c8e7->enter($__internal_ef0c10788067c67ade3af3077d7bfa670a3780d853750895f229b017c679c8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_25bbc96d20dbe22d526f956fd2ad15c68045e398b71fbd59f35af9ed460297e3->leave($__internal_25bbc96d20dbe22d526f956fd2ad15c68045e398b71fbd59f35af9ed460297e3_prof);

        
        $__internal_ef0c10788067c67ade3af3077d7bfa670a3780d853750895f229b017c679c8e7->leave($__internal_ef0c10788067c67ade3af3077d7bfa670a3780d853750895f229b017c679c8e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
