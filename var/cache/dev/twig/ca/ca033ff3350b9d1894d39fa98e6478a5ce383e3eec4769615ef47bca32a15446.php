<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9e31f2edc89fcf027520a5a8cf4cb8a2d5a4fd30463cb9ce3514728dae003b41 extends Twig_Template
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
        $__internal_84e4694431c2289b2e127f7c27638c4034a9b0af50f8cfddfc1bc3cbf00530be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84e4694431c2289b2e127f7c27638c4034a9b0af50f8cfddfc1bc3cbf00530be->enter($__internal_84e4694431c2289b2e127f7c27638c4034a9b0af50f8cfddfc1bc3cbf00530be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_d77eb0f352c886703edc96e79af57ee5763fcfc0287bcac85a4f5e8b9e6f54ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d77eb0f352c886703edc96e79af57ee5763fcfc0287bcac85a4f5e8b9e6f54ef->enter($__internal_d77eb0f352c886703edc96e79af57ee5763fcfc0287bcac85a4f5e8b9e6f54ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_84e4694431c2289b2e127f7c27638c4034a9b0af50f8cfddfc1bc3cbf00530be->leave($__internal_84e4694431c2289b2e127f7c27638c4034a9b0af50f8cfddfc1bc3cbf00530be_prof);

        
        $__internal_d77eb0f352c886703edc96e79af57ee5763fcfc0287bcac85a4f5e8b9e6f54ef->leave($__internal_d77eb0f352c886703edc96e79af57ee5763fcfc0287bcac85a4f5e8b9e6f54ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
