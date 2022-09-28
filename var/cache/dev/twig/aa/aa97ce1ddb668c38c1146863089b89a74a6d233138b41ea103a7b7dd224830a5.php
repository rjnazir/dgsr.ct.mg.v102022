<?php

/* AdminBundle:CtCentre:add.html.twig */
class __TwigTemplate_9980684897bbf5cf30b9e2ae5c2dd992c62a6149c5808ddd241b75383ae71f6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtCentre:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_436195f4cb810d4e5a5438ad759c5e796cca0584d2b4b4703392fbb67ce68ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_436195f4cb810d4e5a5438ad759c5e796cca0584d2b4b4703392fbb67ce68ed8->enter($__internal_436195f4cb810d4e5a5438ad759c5e796cca0584d2b4b4703392fbb67ce68ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCentre:add.html.twig"));

        $__internal_d19731a44405e83fb48d7ba9977953bc9761d47208880037c971d1a1e4a30684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19731a44405e83fb48d7ba9977953bc9761d47208880037c971d1a1e4a30684->enter($__internal_d19731a44405e83fb48d7ba9977953bc9761d47208880037c971d1a1e4a30684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCentre:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_centre"] = true;
        // line 8
        $context["menu_centre_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_436195f4cb810d4e5a5438ad759c5e796cca0584d2b4b4703392fbb67ce68ed8->leave($__internal_436195f4cb810d4e5a5438ad759c5e796cca0584d2b4b4703392fbb67ce68ed8_prof);

        
        $__internal_d19731a44405e83fb48d7ba9977953bc9761d47208880037c971d1a1e4a30684->leave($__internal_d19731a44405e83fb48d7ba9977953bc9761d47208880037c971d1a1e4a30684_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_62089623c538ed29ac839800354b28e0f4ea18d4c300a8484f87db8dc0a59712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62089623c538ed29ac839800354b28e0f4ea18d4c300a8484f87db8dc0a59712->enter($__internal_62089623c538ed29ac839800354b28e0f4ea18d4c300a8484f87db8dc0a59712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4642f958cbb64e82de1ab2e81f0ffa02ce545ff371e7fa045c625348d230311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4642f958cbb64e82de1ab2e81f0ffa02ce545ff371e7fa045c625348d230311->enter($__internal_d4642f958cbb64e82de1ab2e81f0ffa02ce545ff371e7fa045c625348d230311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Centre ";
        
        $__internal_d4642f958cbb64e82de1ab2e81f0ffa02ce545ff371e7fa045c625348d230311->leave($__internal_d4642f958cbb64e82de1ab2e81f0ffa02ce545ff371e7fa045c625348d230311_prof);

        
        $__internal_62089623c538ed29ac839800354b28e0f4ea18d4c300a8484f87db8dc0a59712->leave($__internal_62089623c538ed29ac839800354b28e0f4ea18d4c300a8484f87db8dc0a59712_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_556dd68de09a52fd822b1af94e56e7577c9e98eff7a31ae069eac402a101e681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_556dd68de09a52fd822b1af94e56e7577c9e98eff7a31ae069eac402a101e681->enter($__internal_556dd68de09a52fd822b1af94e56e7577c9e98eff7a31ae069eac402a101e681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2f543163d6d090c4044fa660654bdbb2216f73801aa1fd3e37ad1552e3b538c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f543163d6d090c4044fa660654bdbb2216f73801aa1fd3e37ad1552e3b538c->enter($__internal_e2f543163d6d090c4044fa660654bdbb2216f73801aa1fd3e37ad1552e3b538c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un centre</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctProvince", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctrNom", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctrCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_centre\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_e2f543163d6d090c4044fa660654bdbb2216f73801aa1fd3e37ad1552e3b538c->leave($__internal_e2f543163d6d090c4044fa660654bdbb2216f73801aa1fd3e37ad1552e3b538c_prof);

        
        $__internal_556dd68de09a52fd822b1af94e56e7577c9e98eff7a31ae069eac402a101e681->leave($__internal_556dd68de09a52fd822b1af94e56e7577c9e98eff7a31ae069eac402a101e681_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtCentre:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  141 => 38,  133 => 33,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Centre {% endblock %}

{% set menu_centre        = true %}
{% set menu_centre_create = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un centre</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctProvince) }}
                        {{ form_row(form.ctrNom) }}
                        {{ form_row(form.ctrCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_centre\"/>
                        <a href=\"{{ path('centre_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtCentre:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtCentre/add.html.twig");
    }
}
