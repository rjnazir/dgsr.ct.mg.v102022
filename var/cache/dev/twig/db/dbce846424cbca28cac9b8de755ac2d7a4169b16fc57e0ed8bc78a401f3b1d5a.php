<?php

/* email/layoutEmail.email.twig */
class __TwigTemplate_3c1d15663bffd734f74da20d0fde09ebab9948302dc4df2f964dba43852121ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
            'body_html_content' => array($this, 'block_body_html_content'),
            'body_html_footer_action' => array($this, 'block_body_html_footer_action'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea55c7a16ca1b1c05b10f1b70073637a1a7ae2d6028f45ddb2852c1272873f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea55c7a16ca1b1c05b10f1b70073637a1a7ae2d6028f45ddb2852c1272873f8e->enter($__internal_ea55c7a16ca1b1c05b10f1b70073637a1a7ae2d6028f45ddb2852c1272873f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/layoutEmail.email.twig"));

        $__internal_640de06c34cc9eb66c49224a571a3c5a93e44585394d5d2b9671b19e7ae829a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_640de06c34cc9eb66c49224a571a3c5a93e44585394d5d2b9671b19e7ae829a0->enter($__internal_640de06c34cc9eb66c49224a571a3c5a93e44585394d5d2b9671b19e7ae829a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/layoutEmail.email.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body_text', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ea55c7a16ca1b1c05b10f1b70073637a1a7ae2d6028f45ddb2852c1272873f8e->leave($__internal_ea55c7a16ca1b1c05b10f1b70073637a1a7ae2d6028f45ddb2852c1272873f8e_prof);

        
        $__internal_640de06c34cc9eb66c49224a571a3c5a93e44585394d5d2b9671b19e7ae829a0->leave($__internal_640de06c34cc9eb66c49224a571a3c5a93e44585394d5d2b9671b19e7ae829a0_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_91147529542f92421b2214cec31ee3791a057b07999a451427ee0007ccd308d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91147529542f92421b2214cec31ee3791a057b07999a451427ee0007ccd308d0->enter($__internal_91147529542f92421b2214cec31ee3791a057b07999a451427ee0007ccd308d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_22d517647c1819ed45e2046eabd4fbb14dba32058ae3f8427be0d3850386813e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d517647c1819ed45e2046eabd4fbb14dba32058ae3f8427be0d3850386813e->enter($__internal_22d517647c1819ed45e2046eabd4fbb14dba32058ae3f8427be0d3850386813e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        
        $__internal_22d517647c1819ed45e2046eabd4fbb14dba32058ae3f8427be0d3850386813e->leave($__internal_22d517647c1819ed45e2046eabd4fbb14dba32058ae3f8427be0d3850386813e_prof);

        
        $__internal_91147529542f92421b2214cec31ee3791a057b07999a451427ee0007ccd308d0->leave($__internal_91147529542f92421b2214cec31ee3791a057b07999a451427ee0007ccd308d0_prof);

    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a46dd8d8c11714da0a003fd3fabeedb6aa1c81baad6e570ef16a2719ee60abfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46dd8d8c11714da0a003fd3fabeedb6aa1c81baad6e570ef16a2719ee60abfb->enter($__internal_a46dd8d8c11714da0a003fd3fabeedb6aa1c81baad6e570ef16a2719ee60abfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_1b6f2752153a6a92623b642192e1ca82a2038e7369bf7be222a9293ccd412aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6f2752153a6a92623b642192e1ca82a2038e7369bf7be222a9293ccd412aef->enter($__internal_1b6f2752153a6a92623b642192e1ca82a2038e7369bf7be222a9293ccd412aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        
        $__internal_1b6f2752153a6a92623b642192e1ca82a2038e7369bf7be222a9293ccd412aef->leave($__internal_1b6f2752153a6a92623b642192e1ca82a2038e7369bf7be222a9293ccd412aef_prof);

        
        $__internal_a46dd8d8c11714da0a003fd3fabeedb6aa1c81baad6e570ef16a2719ee60abfb->leave($__internal_a46dd8d8c11714da0a003fd3fabeedb6aa1c81baad6e570ef16a2719ee60abfb_prof);

    }

    // line 5
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_99198ca64652607ebc2ed97853418076749e9a373ae6827b5c8f5dd27d0e6443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99198ca64652607ebc2ed97853418076749e9a373ae6827b5c8f5dd27d0e6443->enter($__internal_99198ca64652607ebc2ed97853418076749e9a373ae6827b5c8f5dd27d0e6443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_593c9561ce655139d65d4dadd5cc5f33fe979e1a70feb78f836a1caa76f95866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593c9561ce655139d65d4dadd5cc5f33fe979e1a70feb78f836a1caa76f95866->enter($__internal_593c9561ce655139d65d4dadd5cc5f33fe979e1a70feb78f836a1caa76f95866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        // line 6
        echo "    <html>
        <head>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        </head>

        <body style=\"margin:0;\">
            <table width=\"620\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px;\">
                <tbody>
                    <tr>
                        ";
        // line 15
        $this->displayBlock('body_html_content', $context, $blocks);
        // line 16
        echo "                    </tr>
                    <tr>
                        <td colspan=\"2\">
                            ";
        // line 19
        $this->displayBlock('body_html_footer_action', $context, $blocks);
        // line 20
        echo "                        </td>
                    </tr>
                </tbody>
            </table>
        </body>
    </html>
";
        
        $__internal_593c9561ce655139d65d4dadd5cc5f33fe979e1a70feb78f836a1caa76f95866->leave($__internal_593c9561ce655139d65d4dadd5cc5f33fe979e1a70feb78f836a1caa76f95866_prof);

        
        $__internal_99198ca64652607ebc2ed97853418076749e9a373ae6827b5c8f5dd27d0e6443->leave($__internal_99198ca64652607ebc2ed97853418076749e9a373ae6827b5c8f5dd27d0e6443_prof);

    }

    // line 15
    public function block_body_html_content($context, array $blocks = array())
    {
        $__internal_619179b5d00298411e41b32f7a3eaa1b46a5c73771f43f1c3732cb73ebd6ab94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_619179b5d00298411e41b32f7a3eaa1b46a5c73771f43f1c3732cb73ebd6ab94->enter($__internal_619179b5d00298411e41b32f7a3eaa1b46a5c73771f43f1c3732cb73ebd6ab94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        $__internal_3059388287bdc2dd552883630f0d6073f99fcff8d9bbf7becd213a12c16531bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3059388287bdc2dd552883630f0d6073f99fcff8d9bbf7becd213a12c16531bd->enter($__internal_3059388287bdc2dd552883630f0d6073f99fcff8d9bbf7becd213a12c16531bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        
        $__internal_3059388287bdc2dd552883630f0d6073f99fcff8d9bbf7becd213a12c16531bd->leave($__internal_3059388287bdc2dd552883630f0d6073f99fcff8d9bbf7becd213a12c16531bd_prof);

        
        $__internal_619179b5d00298411e41b32f7a3eaa1b46a5c73771f43f1c3732cb73ebd6ab94->leave($__internal_619179b5d00298411e41b32f7a3eaa1b46a5c73771f43f1c3732cb73ebd6ab94_prof);

    }

    // line 19
    public function block_body_html_footer_action($context, array $blocks = array())
    {
        $__internal_796d2be5e85198b49f01b3c3e78571a383508b3054a5953ad89a1274ea4edad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796d2be5e85198b49f01b3c3e78571a383508b3054a5953ad89a1274ea4edad2->enter($__internal_796d2be5e85198b49f01b3c3e78571a383508b3054a5953ad89a1274ea4edad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        $__internal_057cc6a7057f6b54ea4bd7bd9263d71cad26c954de0dbfeb6ff1713906dba125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057cc6a7057f6b54ea4bd7bd9263d71cad26c954de0dbfeb6ff1713906dba125->enter($__internal_057cc6a7057f6b54ea4bd7bd9263d71cad26c954de0dbfeb6ff1713906dba125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        
        $__internal_057cc6a7057f6b54ea4bd7bd9263d71cad26c954de0dbfeb6ff1713906dba125->leave($__internal_057cc6a7057f6b54ea4bd7bd9263d71cad26c954de0dbfeb6ff1713906dba125_prof);

        
        $__internal_796d2be5e85198b49f01b3c3e78571a383508b3054a5953ad89a1274ea4edad2->leave($__internal_796d2be5e85198b49f01b3c3e78571a383508b3054a5953ad89a1274ea4edad2_prof);

    }

    public function getTemplateName()
    {
        return "email/layoutEmail.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  146 => 19,  129 => 15,  113 => 20,  111 => 19,  106 => 16,  104 => 15,  93 => 6,  84 => 5,  67 => 3,  50 => 1,  40 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}{% endblock %}

{% block body_text %}{% endblock %}

{% block body_html %}
    <html>
        <head>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        </head>

        <body style=\"margin:0;\">
            <table width=\"620\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px;\">
                <tbody>
                    <tr>
                        {% block body_html_content %}{% endblock %}
                    </tr>
                    <tr>
                        <td colspan=\"2\">
                            {% block body_html_footer_action %}{% endblock %}
                        </td>
                    </tr>
                </tbody>
            </table>
        </body>
    </html>
{% endblock %}", "email/layoutEmail.email.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app\\Resources\\views\\email\\layoutEmail.email.twig");
    }
}
