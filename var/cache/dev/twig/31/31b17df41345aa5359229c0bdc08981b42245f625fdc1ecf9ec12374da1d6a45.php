<?php

/* @Admin/CtTypeAnomalie/add.html.twig */
class __TwigTemplate_d369efc57a1e922720b71345722d149879a5489b1046af045475f989f92f9120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeAnomalie/add.html.twig", 1);
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
        $__internal_8b94b683d886da66c211642651f9b949c8d2b3841526832f70938c193385c60d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b94b683d886da66c211642651f9b949c8d2b3841526832f70938c193385c60d->enter($__internal_8b94b683d886da66c211642651f9b949c8d2b3841526832f70938c193385c60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeAnomalie/add.html.twig"));

        $__internal_30802dd988de34ee3189b2dc02f83d144385f1df540a1c4592f48f834ab0df4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30802dd988de34ee3189b2dc02f83d144385f1df540a1c4592f48f834ab0df4d->enter($__internal_30802dd988de34ee3189b2dc02f83d144385f1df540a1c4592f48f834ab0df4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeAnomalie/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_anomalie"] = true;
        // line 8
        $context["menu_type_anomalie"] = true;
        // line 9
        $context["menu_type_anomalie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b94b683d886da66c211642651f9b949c8d2b3841526832f70938c193385c60d->leave($__internal_8b94b683d886da66c211642651f9b949c8d2b3841526832f70938c193385c60d_prof);

        
        $__internal_30802dd988de34ee3189b2dc02f83d144385f1df540a1c4592f48f834ab0df4d->leave($__internal_30802dd988de34ee3189b2dc02f83d144385f1df540a1c4592f48f834ab0df4d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_85a0b723367f0124a5f29e61ef74527145476a41fc1678e4cb6e29a4a2f7a390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85a0b723367f0124a5f29e61ef74527145476a41fc1678e4cb6e29a4a2f7a390->enter($__internal_85a0b723367f0124a5f29e61ef74527145476a41fc1678e4cb6e29a4a2f7a390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af6ede501a8ddd7239d6e83a5132c6d7d0e64eb9a090725f0a1f548b4239f0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6ede501a8ddd7239d6e83a5132c6d7d0e64eb9a090725f0a1f548b4239f0d0->enter($__internal_af6ede501a8ddd7239d6e83a5132c6d7d0e64eb9a090725f0a1f548b4239f0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type anomalie ";
        
        $__internal_af6ede501a8ddd7239d6e83a5132c6d7d0e64eb9a090725f0a1f548b4239f0d0->leave($__internal_af6ede501a8ddd7239d6e83a5132c6d7d0e64eb9a090725f0a1f548b4239f0d0_prof);

        
        $__internal_85a0b723367f0124a5f29e61ef74527145476a41fc1678e4cb6e29a4a2f7a390->leave($__internal_85a0b723367f0124a5f29e61ef74527145476a41fc1678e4cb6e29a4a2f7a390_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca3cefba981ae42ccde2b10c422f7fa67d94b0a585d288825bfc00e1429cf55c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca3cefba981ae42ccde2b10c422f7fa67d94b0a585d288825bfc00e1429cf55c->enter($__internal_ca3cefba981ae42ccde2b10c422f7fa67d94b0a585d288825bfc00e1429cf55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3aff1536875c719f3d21ae4c5c3f69b6bbd46845f1317fcf9e921b109fb5d0bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aff1536875c719f3d21ae4c5c3f69b6bbd46845f1317fcf9e921b109fb5d0bc->enter($__internal_3aff1536875c719f3d21ae4c5c3f69b6bbd46845f1317fcf9e921b109fb5d0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un type d'anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_anomalie\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_3aff1536875c719f3d21ae4c5c3f69b6bbd46845f1317fcf9e921b109fb5d0bc->leave($__internal_3aff1536875c719f3d21ae4c5c3f69b6bbd46845f1317fcf9e921b109fb5d0bc_prof);

        
        $__internal_ca3cefba981ae42ccde2b10c422f7fa67d94b0a585d288825bfc00e1429cf55c->leave($__internal_ca3cefba981ae42ccde2b10c422f7fa67d94b0a585d288825bfc00e1429cf55c_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeAnomalie/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout Type anomalie {% endblock %}

{% set menu_anomalie             = true %}
{% set menu_type_anomalie        = true %}
{% set menu_type_anomalie_create = true %}

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
                        <h3 class=\"box-title\">Créer un type d'anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.atpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_anomalie\"/>
                        <a href=\"{{ path('type_anomalie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeAnomalie/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeAnomalie\\add.html.twig");
    }
}
